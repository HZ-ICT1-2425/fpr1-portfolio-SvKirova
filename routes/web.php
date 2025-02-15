<?php

use App\Http\Controllers\StaticContentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StaticContentController::class, 'index'])->name('home');
