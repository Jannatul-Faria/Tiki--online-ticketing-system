<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/bus', [HomeController::class, 'bus'])->name('bus');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/register', [HomeController::class, 'register'])->name('register');

Route::post('/user-add', [UserController::class, 'store'])->name('userStore');
Route::post('/user-check', [UserController::class, 'check'])->name('access');
Route::get('/user-logout', [UserController::class, 'logout'])->name('logout');

Route::post('/book-seat', [TripController::class, 'store'])->name('booking');
Route::get('/trip-list', [TripController::class, 'index'])->name('trip-list');

Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/dashboard/seat-list', [SeatController::class, 'index'])->name('seat-list');
Route::get('/dashboard/seat-add', [SeatController::class, 'create'])->name('seat-add');
Route::post('/dashboard/seat-store', [SeatController::class, 'store'])->name('seat-store');

Route::get('/dashboard/location-add', [LocationController::class, 'create'])->name('location-add');
Route::get('/dashboard/location-list', [LocationController::class, 'index'])->name('location-list');
Route::post('/dashboard/location-store', [LocationController::class, 'store'])->name('location-store');

Route::get('/admin-logout', [AdminController::class, 'logout'])->name('admin-logout');
