<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BankDetail;
use Illuminate\Support\facades\DB;

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

    public function purchaseHistory()
    {
        $user = auth()->user();

        $purchases = DB::table('user_plans')->where('user_id', $user->id)
                        ->orderBy('id', 'desc')
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
