<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::prefix('admin')->group(function () {
    Route::get('login',[App\Http\Controllers\Admin\LoginController::class,'index'])->name('login');
    Route::post('login',[App\Http\Controllers\Admin\LoginController::class,'login'])->name('login');

    Route::get('',[App\Http\Controllers\Admin\HomeController::class,'index']);
    Route::get('/home',[App\Http\Controllers\Admin\HomeController::class,'index']);
    
});

