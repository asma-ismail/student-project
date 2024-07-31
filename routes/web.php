<?php

use App\Http\Controllers\ElasticController;
use Illuminate\Support\Facades\Route;

Route::get('/upload', function () {
    return view('uploader');
})->name('uploader');
Route::get('/search', function () {
    return view('search');
})->name('search');
Route::get('/test', [ElasticController::class, 'test']);
Route::get('/index', [ElasticController::class, 'index']);
