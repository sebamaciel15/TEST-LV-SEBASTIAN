<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MenuController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('menues', MenuController::class)->names('admin.menues');
