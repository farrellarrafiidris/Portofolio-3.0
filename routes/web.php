<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MainController::class, 'index'])->name('Welcome');
Route::get('/home',[MainController::class, 'home'])->name('Home');
Route::get('/layout',[MainController::class, 'layout'])->name('layout');
