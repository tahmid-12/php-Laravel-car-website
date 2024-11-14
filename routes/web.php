<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CarController;

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

Route::get('/', [HomeController::class,'index']);

Route::get('/car/search',[CarController::class, 'search'])->name('car.search');
Route::resource('/car',CarController::class);

Route::get('sign-up',[SignupController::class, 'create'])->name('sign-up');
Route::get('log-in',[LoginController::class, 'create'])->name('log-in');
