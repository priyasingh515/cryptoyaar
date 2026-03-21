<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\WalletTransaction;
use Carbon\Carbon;

class RefundController extends Controller
{
    public function refund(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id'
        ]);

        try {
            DB::transaction(function () use ($request) {

                $userId = $request->user_id;

                $plan = DB::table('user_plans')
                    ->where('user_id', $userId)
                    ->where('status', 'paid')
                    ->latest()
                    ->first();

                if (!$plan) {
                    throw new \Exception('No active plan');
                }

                $expiry = Carbon::parse($plan->created_at)->addDays(7);

                if (now()->gt($expiry)) {
                    throw new \Exception('Refund expired');
                }

                $commissions = DB::table('referral_commissions')
                    ->where('from_user_id', $userId)
                    ->where('is_refunded', false)
                    ->get();

                foreach ($commissions as $c) {

                    DB::table('wallets')
                        ->where('user_id', $c->user_id)
                        ->update([
                            'locked_balance' => DB::raw("GREATEST(locked_balance - $c->amount,0)")
                        ]);

                    WalletTransaction::create([
                        'user_id' => $c->user_id,
                        'amount' => $c->amount,
                        'type' => 'debit',
                        'remark' => "Refund deduction",
                        'is_locked' => false,
                    ]);

                    DB::table('referral_commissions')
                        ->where('id', $c->id)
                        ->update(['is_refunded' => true]);
                }

                DB::table('user_plans')
                    ->where('id', $plan->id)
                    ->update(['status' => 'refunded']);
            });

            return response()->json([
                'status' => true,
                'message' => 'Refund successful'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 400);
        }
    }
}