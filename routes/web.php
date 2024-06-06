<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\LatinController;
use App\Http\Controllers\MoviesController;

Route::view('/', 'welcome')->name('home');
Route::view('archive', 'archive');
Route::view('/calories', 'calories');
// Route::view('/about', 'about');

// Wildcard routes should generally be at the bottom to prevent
// collision with other routes, like /series/serie and /series/{serie}
// the {serie} could be anything so that includes /series/serie, hence collision

Route::get('/latin', [LatinController::class, "displayAll"]);

Route::controller(AnimeController::class)->group(function () {
    Route::get('/archive/anime', "displayAll");
    Route::get('/archive/anime/create', "displayCreate");
    Route::post('/archive/anime', "createAnime");
    Route::get('/archive/anime/{anime}', "displaySingleAnime");
    Route::get('/archive/anime/{anime}/edit',  "displayEditAnime");
    Route::patch('/archive/anime/{anime}',  "editSingleAnime");
    Route::delete('/archive/anime/{anime}',  "deleteSingleAnime");
});

Route::controller(GamesController::class)->group(function (){
    Route::get('/archive/games',  "displayAll");
    Route::get('/archive/games/create',  "displayCreate");
    Route::post('/archive/games',  "createGame");
    Route::get('/archive/games/{game}',  "displaySingleGame");
    Route::get('/archive/games/{game}/edit',  "displayEditGame");
    Route::patch('/archive/games/{game}',  "editSingleGame");
    Route::delete('/archive/games/{game}',  "deleteSingleGame");
});

Route::controller(MoviesController::class)->group(function (){
    Route::get('/archive/movies',  "displayAll");
    Route::get('/archive/movies/create',  "displayCreate");
    Route::post('/archive/movies',  "createMovie");
    Route::get('/archive/movies/{movie}',  "displaySingleMovie");
    Route::get('/archive/movies/{movie}/edit',  "displayEditMovie");
    Route::patch('/archive/movies/{movie}',  "editSingleMovie");
    Route::delete('/archive/movies/{movie}',  "deleteSingleMovie");
});
