<?php

use App\Http\Controllers\ElasticController;
use Illuminate\Support\Facades\Route;

Route::get('/uploader', [ElasticController::class, 'index'])->name('uploader');

Route::view('/search', 'search')->name('search');
Route::get('/view-document/{path}', [ElasticController::class, 'getDocument'])->name('pdf.show');

Route::post('/upload', [ElasticController::class, 'upload'])->name('upload');
Route::get('/index', [ElasticController::class, 'index']);
