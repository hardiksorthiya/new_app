<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->group(function () {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('user', [App\Http\Controllers\Admin\UserController::class, 'index']);
    Route::get('user/{user_id}/edit', [App\Http\Controllers\Admin\UserController::class, 'edit']);
    Route::get('update-user/{user_id}', [App\Http\Controllers\Admin\UserController::class, 'update']);
    Route::get('user/{user_id}/delete', [App\Http\Controllers\Admin\UserController::class, 'delete']);

});
