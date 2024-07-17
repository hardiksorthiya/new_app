<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\SolutionPagesController;
use App\Http\Controllers\Frontend\FrontendPageController;


Route::get('/', function () {
    $setting = DB::table('setting')->get();
    return view('/frontend/index',[
        'setting' => $setting     
    ]);
    
});

Auth::routes();

Route::get('/frontend/index', [HomeController::class, 'index'])->name('home');

// frontend

Route::get('/administration', [FrontendPageController::class, 'administration'])->name('Administration');
Route::get('/about-us', [FrontendPageController::class, 'about'])->name('About Us');
Route::get('/contact-us', [FrontendPageController::class, 'contact'])->name('Contact Us');











// ADMIN

Route::prefix('admin/')->group(function () {
    
    Route::get('dashboard', [DashboardController::class, 'index']);

    // user add, view, edit, delete
    Route::get('user', [UserController::class, 'index']);
    Route::get('user/add', [UserController::class, 'add_user']);
    Route::post('user/add', [UserController::class, 'insert_user']);
    Route::get('user/{user_id}/edit', [UserController::class, 'edit']);
    Route::put('user/{user_id}', [UserController::class, 'update']);
    Route::get('user/{user_id}/delete', [UserController::class, 'delete']);


    // blog category add, view, delete

    
    Route::get('category', [BlogCategoryController::class, 'categoryindex']);
    Route::get('category', [BlogCategoryController::class, 'categorycreate']);
    Route::post('category', [BlogCategoryController::class, 'categorystore']);
    Route::get('category', [BlogCategoryController::class, 'categoryview']);
    Route::get('edit-category/{category_id}', [BlogCategoryController::class, 'categoryedit']);
    Route::put('update-category/{category_id}', [BlogCategoryController::class, 'categoryupdate']);
    Route::get('delete-category/{category_id}', [BlogCategoryController::class, 'categorydelete']);


    // post add, view, delete

    Route::get('/post', [PostController::class, 'dashboard']);
    Route::get('/create-post', [PostController::class, 'create']);



    // setting

    Route::get('settings', [SettingController::class, 'index']);
    Route::get('create-setting', [SettingController::class, 'create']);
    Route::get('edit-setting', [SettingController::class, 'edit']);
    Route::post('setting/create', [SettingController::class, 'store']);
    Route::put('edit-setting', [PagesController::class, 'update']);


    // pages

    Route::get('pages', [PagesController::class, 'index']);
    Route::get('create-page', [PagesController::class, 'create']);
    Route::post('add-page', [PagesController::class, 'store']);
    Route::get('pages/{page_id}', [PagesController::class, 'edit']);
    Route::put('pages/edit-page/{page_id}', [PagesController::class, 'update']);


    // SolutionPages

    Route::get('solution', [SolutionPagesController::class, 'index']);
    Route::get('solution/create', [SolutionPagesController::class, 'create']);
    Route::post('solution', [SolutionPagesController::class, 'store']);
    Route::get('solution/{page_id}/edit', [SolutionPagesController::class, 'edit']);
    Route::put('solution/{page_id}', [SolutionPagesController::class, 'update']);
    Route::post('solution/{page_id}/delete', [SolutionPagesController::class, 'delete']);









});
