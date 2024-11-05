<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PopularController;
use App\Http\Controllers\WriterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/aboutus', [AboutUsController::class, 'index'])->name('aboutus');

Route::get('/writers', [WriterController::class, 'index'])->name('writer');

Route::get('/popular', [PopularController::class, 'index'])->name('popular');

Route::get('/datascience', [CategoryController::class, 'datascience'])->name('datascience');
Route::get('/networksecurity', [CategoryController::class, 'networksecurity'])->name('networksecurity');

Route::get('/detail/{id}', [ContentController::class, 'show'])->name('detail');