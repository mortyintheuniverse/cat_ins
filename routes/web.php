<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CatinsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[DashboardController::class,'index'])->name('dashboard');
Route::get('/profile',[ProfileController::class,'index']);
Route::post('/cats',[CatinsController::class,'store'])->name('catins.make');
Route::delete('/cats/{id}',[CatinsController::class,'destroy'])->name('catins.destroy');
Route::get('/cats/{id}/',[CatinsController::class,'show'])->name('catins.show');
Route::put('/cats/{id}/',[CatinsController::class,'update'])->name('catins.update');
Route::get('/cats/{id}/edit',[CatinsController::class,'edit'])->name('catins.edit');
Route::get('/terms',[DashboardController::class,'terms']);
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register',[AuthController::class,'store']);
