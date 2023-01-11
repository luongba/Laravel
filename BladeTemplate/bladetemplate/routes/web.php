<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
    return view('welcome');
});

Route::get('/home', [HomeController::class , 'index'])->name('home');
Route::get('/san-pham', [HomeController::class , 'product'])->name('product');
Route::get('/them-san-pham', [HomeController::class , 'getAdd'])->name('getAdd');
Route::post('/them-san-pham', [HomeController::class , 'postAdd'])->name('postAdd');
