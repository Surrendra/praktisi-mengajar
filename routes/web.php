<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sample-view', function () {
    return view('sample-view');
});

Route::get('/sample-bootstrap', function () {
    return view('bootstrap-view');
});
