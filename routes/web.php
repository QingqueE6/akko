<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/movies', function () {
    return view('movies');
});

Route::get('/anime', function () {
    return view('anime');
});

Route::get('/manga', function () {
    return view('manga');
});

Route::get('/games', function () {
    return view('games');
});

Route::get('/about', function () {
    return view('about');
});
