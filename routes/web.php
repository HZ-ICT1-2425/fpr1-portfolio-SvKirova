<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\StaticContentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StaticContentController::class, 'index'])->name('home');
Route::get('/profile', [StaticContentController::class, 'profile'])->name('profile');
Route::get('/dashboard', [StaticContentController::class, 'dashboard'])->name('dashboard');
Route::get('/faq', [StaticContentController::class, 'faq'])->name('faq');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
