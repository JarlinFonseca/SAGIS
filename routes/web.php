<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
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

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('loggin');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('home', [HomeController::class, 'home'])->name('home');
Route::get('notices', [HomeController::class, 'notices'])->name('notices');
Route::get('courses', [HomeController::class, 'courses'])->name('courses');
Route::get('events', [HomeController::class, 'events'])->name('events');
Route::get('gallerys', [HomeController::class, 'gallerys'])->name('gallerys');
Route::get('videos', [HomeController::class, 'videos'])->name('videos');