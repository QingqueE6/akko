<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function displayMovies(){
        $movies = Movie::all();
        return view("movies",    ["movies" => $movies ]);
    }

    public function displaySeries(){
        $series = Movie::all();
        return view("series",    ["series" => $series ]);
    }
}
