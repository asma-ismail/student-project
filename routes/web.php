<?php

use App\Http\Controllers\ElasticController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', [ElasticController::class, 'test']);
Route::get('/index', [ElasticController::class, 'index']);
