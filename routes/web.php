<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sample-view', function () {
    return view('sample-view');
});

Route::get('/home', [HomeController::class, 'home']);
