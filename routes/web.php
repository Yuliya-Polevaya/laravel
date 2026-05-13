<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MyAdminController;

Route::get('/', [MainController::class, 'index'])->name('index');

Route::get('/cards', [CardController::class, 'index'])->name('cards');

Route::get('/user', [UserController::class, 'index'])->name('user');

Route::get('/myadmin', [MyAdminController::class, 'index'])->name('myadmin');