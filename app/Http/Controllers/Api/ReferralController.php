<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Wallet;
use App\Models\WalletTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReferralController extends Controller
{
    public function myNetwork()
    {
        try {

            $users = User::with([
                'wallet',
                'parentUser',
                'referrals.referrals.referrals'
            ])
                ->whereNull('referred_by')
                ->get();

            $wallet = Wallet::where('user_id', auth()->id())->first();

            $allUserIds = $users->pluck('id')
                ->merge(
                    $users->flatMap(function ($user) {
                        return $this->getAllReferralIds($user);
                    })
                )
                ->unique();

            $userPlans = DB::table('user_plans')
                ->whereIn('user_id', $allUserIds)
                ->where('status', 'paid')
                ->orderByDesc('id')
                ->get()
                ->groupBy('user_id');

            $users = $this->processUsers($users, $userPlans);

            $transactions = WalletTransaction::where('user_id', auth()->id())
                ->latest()
                ->get();

            return response()->json([
                'status' => true,
                'data' => [
                    'wallet' => [
                        'total' => $wallet->balance ?? 0,
                        'locked' => $wallet->locked_balance ?? 0,
                        'available' => max(0, ($wallet->balance ?? 0) - ($wallet->locked_balance ?? 0))
                    ],
                    'network' => $users,
                    'transactions' => $transactions
                ]
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 400);
        }
    }

    private function processUsers($users, $userPlans)
    {
        return $users->map(function ($user) use ($userPlans) {

            $wallet = $user->wallet;

            $total = $wallet->balance ?? 0;
            $locked = $wallet->locked_balance ?? 0;
            $available = max(0, $total - $locked);

            $plan = $userPlans[$user->id][0] ?? null;

            $canRefund = false;
            $timeLeft = null;

            if ($plan) {
                $purchaseDate = \Carbon\Carbon::parse($plan->created_at);
                $refundLastDate = $purchaseDate->copy()->addDays(7);

                if (now()->lt($refundLastDate)) {
                    $canRefund = true;
                    $timeLeft = now()->diffForHumans($refundLastDate, true);
                }
            }

            return [
                'id' => $user->id,
                'name' => $user->name,
                'parent' => $user->parentUser->name ?? 'Root',
                'referral_code' => $user->referral_code,

                'wallet' => [
                    'total' => $total,
                    'locked' => $locked,
                    'available' => $available,
                ],

                'refund' => [
                    'can_refund' => $canRefund,
                    'time_left' => $timeLeft,
                ],

                'children' => ($user->referrals && $user->referrals->count())
                    ? $this->processUsers($user->referrals, $userPlans)
                    : []
            ];
        });
    }

    private function getAllReferralIds($user)
    {
        $ids = collect();

        foreach ($user->referrals as $ref) {
            $ids->push($ref->id);
            $ids = $ids->merge($this->getAllReferralIds($ref));
        }

        return $ids;
    }


    public function referralUser(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'referred_by' => 'required|exists:users,referral_code',
        ]);

        try {
            DB::transaction(function () use ($request) {

                $user = User::lockForUpdate()->findOrFail($request->user_id);

                if ($user->parent_id) {
                    throw new \Exception('User already placed');
                }

                $referrerId = User::where('referral_code', $request->referred_by)->value('id');

                $placement = $this->findFreeParent($referrerId);

                if (!$placement) {
                    throw new \Exception('Tree full');
                }

                $parentId = $placement['parent_id'];

                $user->update([
                    'referred_by' => $referrerId,
                    'parent_id' => $parentId,
                ]);

                $parent = User::lockForUpdate()->find($parentId);

                if ($placement['position'] === 'left') {
                    if ($parent->left_child) throw new \Exception('Left filled');
                    $parent->left_child = $user->id;
                } else {
                    if ($parent->right_child) throw new \Exception('Right filled');
                    $parent->right_child = $user->id;
                }

                $parent->save();

                $this->updateLevelUnlock($parent->id);
            });

            return response()->json([
                'status' => true,
                'message' => 'User placed successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 400);
        }
    }

    private function findFreeParent($rootId)
    {
        $queue = [$rootId];

        while ($queue) {
            $current = array_shift($queue);

            $user = User::select('id', 'left_child', 'right_child')->find($current);
            if (!$user) continue;

            if (!$user->left_child) {
                return ['parent_id' => $user->id, 'position' => 'left'];
            }

            if (!$user->right_child) {
                return ['parent_id' => $user->id, 'position' => 'right'];
            }

            $queue[] = $user->left_child;
            $queue[] = $user->right_child;
        }

        return null;
    }

    private function getDepth($userId)
    {
        if (!$userId) return 0;

        $user = User::find($userId);
        if (!$user) return 0;

        return 1 + max(
            $this->getDepth($user->left_child),
            $this->getDepth($user->right_child)
        );
    }

    private function updateLevelUnlock($userId)
    {
        $level = $this->getDepth($userId);

        User::where('id', $userId)->update([
            'level_unlocked' => min($level, 15)
        ]);
    }
}
