<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\LogUserActivity;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('users', UserController::class)->middleware(LogUserActivity::class);
Route::resource('categories', CategoryController::class)->middleware(LogUserActivity::class);
Route::resource('products', ProductController::class)->middleware(LogUserActivity::class);


Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');