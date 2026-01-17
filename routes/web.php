<?php

use App\Http\Controllers\Admin\AdminConroller;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\SupersubCategory;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LikeController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'index']);
Route::post('/register', [HomeController::class, 'register'])->name('user.register');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact-us');
Route::get('/about', [HomeController::class, 'about'])->name('about-us');
Route::get('/privacy', [HomeController::class, 'privacy'])->name('privacy-policy');
Route::get('/terms', [HomeController::class, 'terms'])->name('terms-condition');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/videodetails/{id}', [HomeController::class, 'videodetails'])->name('video-details');

Route::get('/captcha', [AuthController::class, 'captchagenerate'])
    ->name('captcha.generate');

Route::get('login', [AuthController::class, 'loginForm'])->name('admin.login');
Route::post('login', [AuthController::class, 'login'])->name('admin.login.submit');

Route::prefix('admin')->group(function () {

    Route::middleware('auth:admin')->group(function () {
        Route::get('dashboard', [AdminConroller::class, 'index'])->name('admin.dashboard');
        Route::post('logout', [AuthController::class, 'logout'])->name('admin.logout');
        // Role
        Route::get('roles', [RoleController::class, 'index'])->name('roles.index');
        Route::get('roles/create', [RoleController::class, 'create'])->name('roles.create');
        Route::post('roles/store', [RoleController::class, 'store'])->name('roles.store');

        Route::get('roles/{id}/edit', [RoleController::class, 'edit'])->name('roles.edit');
        Route::post('roles/{id}/update', [RoleController::class, 'update'])->name('roles.update');

        Route::get('roles/{role}/permissions', [RoleController::class, 'permissionForm'])->name('roles.permissions');
        Route::post('roles/{role}/permissions', [RoleController::class, 'savePermissions'])->name('roles.permissions.save');

        // Permission
        Route::get('permissions', [PermissionController::class, 'index'])->name('permissions.index');
        Route::get('permissions/create', [PermissionController::class, 'create'])->name('permissions.create');
        Route::post('permissions/store', [PermissionController::class, 'store'])->name('permissions.store');
        Route::post('permissions/{permission}/toggle', [PermissionController::class, 'toggleStatus'])->name('permissions.toggle');

        //member
        Route::get('members', [MemberController::class, 'index'])->name('members.index');
        Route::get('members/create', [MemberController::class, 'create'])->name('members.create');
        Route::post('members/store', [MemberController::class, 'store'])->name('members.store');

        Route::get('members/{id}/edit', [MemberController::class, 'edit'])->name('members.edit');
        Route::post('members/{member}/update', [MemberController::class, 'update'])->name('members.update');
        Route::get('members/{member}/destroy', [MemberController::class, 'destroy'])->name('members.destroy');

        // Plans 
        Route::get('Plans', [PlanController::class, 'create'])->name('plan.create');
        Route::post('/plans', [PlanController::class, 'store'])
            ->name('plans.store');
        Route::get('plan/view', [PlanController::class, 'index'])->name('plan.index');
        Route::get('plans/{id}/edit', [PlanController::class, 'edit'])->name('plan.edit');
        Route::put('plans/{plan}/update', [PlanController::class, 'update'])->name('plan.update');
        Route::delete('plans/{id}', [PlanController::class, 'destroy'])
            ->name('plan.destroy');

        // Video's
        Route::get('/videos', [VideoController::class, 'index'])->name('admin.videos.index');
        Route::get('/videos/create', [VideoController::class, 'create'])->name('admin.videos.create');
        Route::post('/videos/store', [VideoController::class, 'store'])->name('admin.videos.store');
        Route::get('/videos/{id}/edit', [VideoController::class, 'edit'])->name('admin.videos.edit');
        Route::put('/videos/{id}/update', [VideoController::class, 'update'])->name('admin.videos.update');
        Route::delete('/videos/{id}/delete', [VideoController::class, 'destroy'])->name('admin.videos.destroy');
      
        // likes
        Route::post('/videos/{videoId}/like', [LikeController::class, 'toggle'])
            ->name('admin.video.like');

        Route::get('/videos/like-test', [AdminConroller::class, 'likeTest'])
        ->name('videos.like.test');

        //  comment 
        Route::post('/comments/store', [CommentController::class, 'store'])
        ->name('admin.comments.store');

        Route::get('/videos/{videoId}/comments', [CommentController::class, 'index'])
            ->name('admin.comments.index');

        //Category
        Route::get('category', [CategoryController::class, 'index'])->name('category.index');
        Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');

        Route::get('category/{slug}/edit', [CategoryController::class, 'edit'])->name('category.edit');
        Route::post('category/{id}/update', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('category/{id}/destroy', [CategoryController::class, 'destroy'])->name('category.destroy');

  
        //subCategory
        Route::get('subcategory', [SubCategoryController::class, 'index'])->name('subcategory.index');
        Route::get('subcategory/create', [SubCategoryController::class, 'create'])->name('subcategory.create');
        Route::post('subcategory/store', [SubCategoryController::class, 'store'])->name('subcategory.store');


        Route::get('subcategory/{slug}/edit', [SubCategoryController::class, 'edit'])->name('subcategory.edit');
        Route::post('subcategory/{id}/update', [SubCategoryController::class, 'update'])->name('subcategory.update');
        Route::delete('subcategory/{id}/destroy', [SubCategoryController::class, 'destroy'])->name('subcategory.destroy');
  
        //supersubCategory
        Route::get('supersubcategory', [SupersubCategory::class, 'index'])->name('supersubcategory.index');
        Route::get('supersubcategory/create', [SupersubCategory::class, 'create'])->name('supersubcategory.create');
        Route::post('supersubcategory/store', [SupersubCategory::class, 'store'])->name('supersubcategory.store');

        Route::get('supersubcategory/{slug}/edit', [SupersubCategory::class, 'edit'])->name('supersubcategory.edit');
        Route::post('supersubcategory/{id}/update', [SupersubCategory::class, 'update'])->name('supersubcategory.update');
        Route::delete('supersubcategory/{id}/destroy', [SupersubCategory::class, 'destroy'])->name('supersubcategory.destroy');
  

        Route::get('subcategory/{slug}/edit', [SubCategoryController::class, 'edit'])->name('subcategory.edit');
        Route::post('subcategory/{id}/update', [SubCategoryController::class, 'update'])->name('subcategory.update');
        Route::delete('subcategory/{id}/destroy', [SubCategoryController::class, 'destroy'])->name('subcategory.destroy');
  
        //supersubCategory
        Route::get('supersubcategory', [SupersubCategory::class, 'index'])->name('supersubcategory.index');
        Route::get('supersubcategory/create', [SupersubCategory::class, 'create'])->name('supersubcategory.create');
        Route::post('supersubcategory/store', [SupersubCategory::class, 'store'])->name('supersubcategory.store');

        Route::get('supersubcategory/{slug}/edit', [SupersubCategory::class, 'edit'])->name('supersubcategory.edit');
        Route::post('supersubcategory/{id}/update', [SupersubCategory::class, 'update'])->name('supersubcategory.update');

    });
});
