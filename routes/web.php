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


Route::get('/', [\App\Http\Controllers\PlacesController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::resource('places', \App\Http\Controllers\PlacesController::class)->except(['show']);
    Route::post('/logout', [\App\Http\Controllers\UserController::class, 'logout']);
});

Route::middleware('role:admin')->prefix('admin')->group(function (){
    Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index']);
    Route::get('/places', [\App\Http\Controllers\DashboardController::class, 'places']);
    Route::get('/users', [\App\Http\Controllers\DashboardController::class, 'users']);


});
Route::get('/places/{place}', [\App\Http\Controllers\PlacesController::class, 'show']);

Route::get('/register', [\App\Http\Controllers\UserController::class, 'create'])->middleware('guest');
Route::get('/login', [\App\Http\Controllers\UserController::class, 'login'])->name('login')->middleware('guest');


Route::post('/users', [\App\Http\Controllers\UserController::class, 'store']);
Route::post('/users/auth', [\App\Http\Controllers\UserController::class, 'auth']);







