<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class,'index']);
Route::get('/reporting', [UserController::class,'reporting'])->name('reporting');
Route::get('/history', [UserController::class,'history'])->name('history');
Route::get('/hotspots', [UserController::class,'hotspots'])->name('hotspots');
Route::post('/saveHotspot', [UserController::class,'saveHotspot'])->name('saveHotspot');
Route::post('/saveHistory', [UserController::class,'saveHistory'])->name('saveHistory');
Route::get('/search/place', [UserController::class,'searchPlace'])->name('search.place');
Route::get('/route/builder', [UserController::class,'routeBuilder'])->name('route.builder');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('dashboard', 'App\Http\Controllers\UserController@dashboard')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
