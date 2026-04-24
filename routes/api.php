<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BankDetailController;
use App\Http\Controllers\Api\CreatorController;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\PaymentController;
use App\Http\Controllers\Api\PlanController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\API\ReferralController;
use App\Http\Controllers\API\RefundController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // after login 
    Route::get('/profile', [ProfileController::class, 'show']);
    Route::post('/profile/update', [ProfileController::class, 'update']);
    Route::post('/whatsapp-updates', [ProfileController::class, 'whatsappUpdates']);
    Route::get('/expert-categories', [HomeController::class, 'expertCategories']);
    Route::post('/user-favourite', [HomeController::class, 'saveUserFavourite']);
    Route::post('/skip-category', [HomeController::class, 'skipCategory']);

    // category subcategory supersub category list 
    Route::get('/categoryList', [HomeController::class, 'getCategories']);
    Route::get('/subCategoryList/{category_id}/', [HomeController::class, 'subcategories']);
    Route::get('/supCategoryList/{category_id}/', [HomeController::class, 'Supsubcategories']);
    
    //  bank details add/update  list
    Route::post('/bank-details', [BankDetailController::class, 'store']);
    Route::get('/bank-details', [BankDetailController::class, 'show']);

    // become a creator
    Route::post('/become-creator', [CreatorController::class, 'submit']);
    Route::post('/create/video', [CreatorController::class, 'add_video']);
    Route::get('/creator-request-status', [CreatorController::class, 'status']);


    //   plans plan purchase  faq
    Route::get('/plan-list', [HomeController::class, 'planfetch']);
    Route::post('/create-order', [PaymentController::class, 'createOrder']);
    Route::post('/verify-payment', [PaymentController::class, 'verifyPayment']);
    Route::get('/faqs', [HomeController::class, 'faqList']);

    // video 
    Route::get('/video_list', [HomeController::class, 'Videos']);
    Route::post('/watch_time', [HomeController::class, 'storeWatchTime'])->name('store-watch-time');

    //Meetup 
    Route::get('/events', [HomeController::class, 'event']);
    Route::post('/event/interested', [AuthController::class, 'eventInterested']);
    

    // Refer & Earn
    Route::post('/user/referral', [ReferralController::class, 'referralUser']);
    Route::post('/plan/purchase', [PlanController::class, 'purchase']);
    Route::post('/refund', [RefundController::class, 'refund']);
    Route::get('/my-network', [ReferralController::class, 'myNetwork']);
});

Route::post('/send-otp',[AuthController::class,'sendOtp']);
Route::post('/verify-otp',[AuthController::class,'verifyOtp']);


