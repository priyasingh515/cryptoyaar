<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BankDetail;

class BankDetailController extends Controller
{
    //
     public function show()
    {
        return response()->json(
            auth()->user()->bankDetail
        );
    }

    // Add / Update bank details
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
}
