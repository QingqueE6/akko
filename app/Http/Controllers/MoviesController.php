<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function display(){
        $movies = Movie::all();
        return view("movies",    ["movies" => $movies ]);
    }
}
