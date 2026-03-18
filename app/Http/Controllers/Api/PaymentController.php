<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Razorpay\Api\Api;
use App\Models\PlanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    
    public function createOrder(Request $request)
    {
        $request->validate([
            'plan_id' => 'required|exists:plans,id'
        ]);

        $plan = PlanModel::find($request->plan_id);

        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        $order = $api->order->create([
            'receipt' => 'order_'.time(),
            'amount' => $plan->price * 100,
            'currency' => 'INR'
        ]);

        return response()->json([
            'status' => true,
            'order_id' => $order['id'],
            'amount' => $plan->price,
            'plan' => $plan
        ]);
    }

    public function verifyPayment(Request $request)
    {
        $request->validate([
            'razorpay_order_id' => 'required',
            'razorpay_payment_id' => 'required',
            'razorpay_signature' => 'required',
            'plan_id' => 'required'
        ]);

        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        try {
            $attributes = [
                'razorpay_order_id' => $request->razorpay_order_id,
                'razorpay_payment_id' => $request->razorpay_payment_id,
                'razorpay_signature' => $request->razorpay_signature,
            ];

            $api->utility->verifyPaymentSignature($attributes);

            $plan = PlanModel::find($request->plan_id);
            DB::table('user_plans')->insert([
                'user_id' => auth()->id(),
                'plan_id' => $request->plan_id,
                'payment_id' => $request->razorpay_payment_id,
                'status' => 'paid',
                'created_at' => now(),
                'expire_at' => now()->addDays($plan->validity),
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Payment successful & plan activated'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Payment verification failed'
            ], 400);
        }
    }

    
}
