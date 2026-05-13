<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MyAdminController;
use App\Http\Controllers\AboutController;

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/main', [MainController::class, 'index'])->name('main');
Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/myadmin', [MyAdminController::class, 'index'])->name('myadmin');
Route::get('/about', [MainController::class, 'about'])->name('about_start');
Route::post('/about', [MainController::class, 'about'])->name('about');