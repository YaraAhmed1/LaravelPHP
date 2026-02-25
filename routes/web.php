<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/php1', function () {
    return view('php1');
});
Route::get('/page4', function () {
    return view('page4');
});