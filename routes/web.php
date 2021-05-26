<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;


Route::get('/', [MenuController::class, 'index'])->name('menu.index');

Route::get('menu/{menu}', [MenuController::class, 'show'])->name('menu.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
