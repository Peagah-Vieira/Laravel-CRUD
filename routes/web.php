<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/dashboard-profile', 'show')->name('profile');
        Route::patch('/dashboard-profile', 'update')->name('profile.update');
        Route::delete('/dashboard-profile', 'destroy')->name('profile.destroy');
    });
    Route::controller(ApplicationController::class)->group(function () {
        Route::get('/dashboard', 'dashboardShow')->name('dashboard');
        Route::get('/dashboard-users', 'userShow')->name('users');
    });
});

require __DIR__ . '/auth.php';
