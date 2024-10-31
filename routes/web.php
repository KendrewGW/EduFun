<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::prefix('/category')->group(function () {
    Route::get('/datascience', function () {
        return view('category.datascience');
    });

    Route::get('/networksecurity', function () {
        return view('category.networksecurity');
    });
});

Route::get('/writers', function () {
    return view('writers');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/popular', function () {
    return view('aboutus');
});