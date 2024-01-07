<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommodityController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExchangeRateController;
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


Route::controller(AuthController::class)->group(function () {
    Route::get('/', 'loginPage')->name('login-admin');
    Route::post('/login', 'authenticate')->name('login-admin-action');
    Route::post('/logout', 'logout')->name('logout-admin-action');
});
Route::controller(RegisterController::class)->group(function () {
    Route::get('/register','registerPage')->name('register-user-admin');
    Route::post('/register','registerAction')->name('register-user-admin-action');
});

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('user', UserController::class);
    Route::resource('komoditas', CommodityController::class);
    Route::resource('nilai_tukar', ExchangeRateController::class);
});
