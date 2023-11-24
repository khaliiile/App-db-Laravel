<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\informationController;
use App\Http\Controllers\profileController;
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

Route::get('/index',[homeController::class,'home'])->name('home');
Route::get('/profile',[profileController::class,'profile'])->name('profile');
Route::get('/information',[informationController::class,'information'])->name('information');
Route::get('/', function () {
    return view('home');
});

