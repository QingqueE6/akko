<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function displayAllMovies(){
        $movies = Movie::all();
        return view("media/movies/movies",    ["movies" => $movies]);
    }

    public function displaySingleMovie(Movie $movie){
        return view("media/movies/single-movie",    ["movie" => $movie]);
    }

    public function displayAllSeries(){
        $series = Movie::all();
        return view("media/series/series",    ["series" => $series]);
    }

    public function displaySingleSerie(Movie $serie){
        return view("media/series/single-serie",    ["serie" => $serie]);
    }
}
