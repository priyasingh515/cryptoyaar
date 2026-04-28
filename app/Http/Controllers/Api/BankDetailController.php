<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BankDetail;
use Illuminate\Support\Facades\DB;

class BankDetailController extends Controller
{
    //
     public function show()
    {
        return response()->json(
            auth()->user()->bankDetail
        );
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'bank_name'  => 'required',
            'account_no' => 'required',
            'ifsc'       => 'required'
        ]);

        BankDetail::updateOrCreate(
            ['user_id' => auth()->id()],
            [
                'bank_name'  => $request->bank_name,
                'account_no' => $request->account_no,
                'ifsc'       => $request->ifsc
            ]
        );

        return response()->json([
            'status' => true,
            'message' => 'Bank details saved successfully'
        ]);
    }

    // public function purchaseHistory()
    // {
    //     $user = auth()->user();

    //     $purchases = DB::table('user_plans')->where('user_id', $user->id)
    //                     ->orderBy('id', 'desc')
    //                     ->get();

    //     if ($purchases->isEmpty()) {
    //         return response()->json([
    //             'status' => false,
    //             'message' => 'No purchase history found',
    //             'data' => []
    //         ]);
    //     }

    //     return response()->json([
    //         'status' => true,
    //         'message' => 'Purchase history',
    //         'data' => $purchases
    //     ]);
    // }

    public function purchaseHistory()
    {
        $user = auth()->user();

        $purchases = DB::table('user_plans')
            ->join('plans', 'user_plans.plan_id', '=', 'plans.id')
            ->where('user_plans.user_id', $user->id)
            ->orderBy('user_plans.id', 'desc')
            ->select(
                'user_plans.*',
                'plans.plan_name',
                'plans.price',
                'plans.validity as duration',
            )
            ->get();

        if ($purchases->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => 'No purchase history found',
                'data' => []
            ]);
        }

        return response()->json([
            'status' => true,
            'message' => 'Purchase history',
            'data' => $purchases
        ]);
    }
}
