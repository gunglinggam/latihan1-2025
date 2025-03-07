<?php

use App\Http\Controllers\PosterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/poster', [PosterController::class, 'showForm']);
Route::post('/poster/submit', [PosterController::class, 'submit']);