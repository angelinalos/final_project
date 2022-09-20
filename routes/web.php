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

Route::get('/places/create', [\App\Http\Controllers\PlacesController::class, 'create'])->middleware('auth');

Route::post('/places', [\App\Http\Controllers\PlacesController::class, 'store'])->middleware('auth');

Route::get('/places/{place}/edit', [\App\Http\Controllers\PlacesController::class, 'edit'])->middleware('auth');

Route::put('/places/{place}', [\App\Http\Controllers\PlacesController::class, 'update'])->middleware('auth');

Route::delete('/places/{place}', [\App\Http\Controllers\PlacesController::class, 'delete'])->middleware('auth');

Route::get('/places/{place}', [\App\Http\Controllers\PlacesController::class, 'show']);

Route::get('/register', [\App\Http\Controllers\UserController::class, 'create'])->middleware('guest');

Route::post('/users', [\App\Http\Controllers\UserController::class, 'store']);

Route::post('/logout', [\App\Http\Controllers\UserController::class, 'logout'])->middleware('auth');

Route::get('/login', [\App\Http\Controllers\UserController::class, 'login'])->name('login')->middleware('guest');

Route::post('/users/auth', [\App\Http\Controllers\UserController::class, 'auth']);







