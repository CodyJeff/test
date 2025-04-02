<?php

use Illuminate\Support\Facades\Route;

Route::middleware('authenticated')->group(function () {
    Route::get('/test', function () {
        return view('welcome');
    });
});