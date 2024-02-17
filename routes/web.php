<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [AuthController::class, 'login']);

Route::post('login_post', [AuthController::class, 'login_post']);

Route::get('register', [AuthController::class, 'register']);

Route::post('register_post', [AuthController::class, 'register_post']);

Route::get('forgot', [AuthController::class, 'forgot']);

Route::get('admin/dashboard', [DashboardController::class, 'index']);

Route::get('admin/staff/list', [StaffController::class, 'index']);