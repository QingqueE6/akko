<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function displayAllMovies(){
        $movies = Movie::where('form', 'movie')->get();
        $moviesSorted = $movies->sortDesc();
        return view("media/movies/movies",    ["movies" => $moviesSorted]);
    }

    public function displaySingleMovie(Movie $movie){
        return view("media/movies/single-movie",    ["movie" => $movie]);
    }

    public function displayAllSeries(){
        $series = Movie::where('form', 'series')->get();
        $seriesSorted = $series->sortDesc();
        return view("media/series/series",    ["series" => $seriesSorted]);
    }

    public function displaySingleSerie(Movie $serie){
        return view("media/series/single-serie",    ["serie" => $serie]);
    }
}
