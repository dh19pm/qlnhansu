<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\OrganizationsController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\ChamCongController;
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

// Auth

Route::get('login', [AuthenticatedSessionController::class, 'create'])
    ->name('login')
    ->middleware('guest');

Route::post('login', [AuthenticatedSessionController::class, 'store'])
    ->name('login.store')
    ->middleware('guest');

Route::delete('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

// Dashboard

Route::get('/', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware('auth');

// Users

Route::get('users', [UsersController::class, 'index'])
    ->name('users')
    ->middleware('auth');

Route::post('users', [UsersController::class, 'store'])
    ->name('users.store')
    ->middleware('auth');

Route::get('users/{user}/edit', [UsersController::class, 'edit'])
    ->name('users.edit')
    ->middleware('auth');

Route::put('users/{user}', [UsersController::class, 'update'])
    ->name('users.update')
    ->middleware('auth');

Route::delete('users/{user}', [UsersController::class, 'destroy'])
    ->name('users.destroy')
    ->middleware('auth');

Route::put('users/{user}/restore', [UsersController::class, 'restore'])
    ->name('users.restore')
    ->middleware('auth');

// NhanVien

Route::get('nhanvien', [NhanVienController::class, 'index'])
    ->name('nhanvien')
    ->middleware('auth');

Route::get('nhanvien/create', [NhanVienController::class, 'create'])
    ->name('nhanvien.create')
    ->middleware('auth');

Route::post('nhanvien', [NhanVienController::class, 'store'])
    ->name('nhanvien.store')
    ->middleware('auth');

Route::get('nhanvien/{nhanvien}/edit', [NhanVienController::class, 'edit'])
    ->name('nhanvien.edit')
    ->middleware('auth');

Route::put('nhanvien/{nhanvien}', [NhanVienController::class, 'update'])
    ->name('nhanvien.update')
    ->middleware('auth');

Route::delete('nhanvien/{nhanvien}', [NhanVienController::class, 'destroy'])
    ->name('nhanvien.destroy')
    ->middleware('auth');

Route::put('nhanvien/{nhanvien}/restore', [NhanVienController::class, 'restore'])
    ->name('nhanvien.restore')
    ->middleware('auth');

// Images

Route::get('/img/{path}', [ImagesController::class, 'show'])
    ->where('path', '.*')
    ->name('image');

// NhanVien
Route::get('chamcong', [ChamCongController::class, 'index'])
    ->name('chamcong')
    ->middleware('auth');

Route::get('chamcong/{nhanvien}/create', [ChamCongController::class, 'create'])
    ->name('chamcong.create')
    ->middleware('auth');

Route::get('chamcong/{chamcong}/edit', [ChamCongController::class, 'edit'])
    ->name('chamcong.edit')
    ->middleware('auth');

Route::post('chamcong/{nhanvien}', [ChamCongController::class, 'store'])
    ->name('chamcong.store')
    ->middleware('auth');

Route::put('chamcong/{chamcong}', [ChamCongController::class, 'update'])
    ->name('chamcong.update')
    ->middleware('auth');

Route::delete('chamcong/{chamcong}', [ChamCongController::class, 'destroy'])
    ->name('chamcong.destroy')
    ->middleware('auth');

Route::put('chamcong/{chamcong}/restore', [ChamCongController::class, 'restore'])
    ->name('chamcong.restore')
    ->middleware('auth');

