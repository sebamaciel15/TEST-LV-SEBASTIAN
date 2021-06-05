<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\CategoryController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('menus', MenuController::class)->names('admin.menues');

Route::resource('categories', CategoryController::class)->names('admin.categories');
