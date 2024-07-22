<?php

namespace App\Http\Controllers;

use App\Mail\NewEntryMovie;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MoviesController extends Controller
{
    public function displayAll(){        
        $movies = Movie::where('form', 'Movie')->get();
        $moviesSorted = $movies->sortDesc();
        $series = Movie::where('form', 'Series')->get();
        $seriesSorted = $series->sortDesc();
        return view("media/movies/movies", [
                                            "movies" => $moviesSorted,
                                            "series" => $seriesSorted
    ]);
    }

    public function displaySingleMovie(Movie $movie){
        return view("media/movies/single-movie",    ["movie" => $movie]);
    }

    public function displayCreate(){
        return view("media.movies.create-movie");
    }

    public function createMovie(Request $request){
        $request->validate([
            'title' => ['required'],
            'year_watched' => ['required']
        ]);

        $movie = Movie::create([
            'title' => request('title'),
            'year_watched' => request('year_watched'),
            'form' => request('form'),
        ]);

        Mail::to("qingquestatus@outlook.com")->send(new NewEntryMovie($movie));

        return redirect('/archive/movies/' . $movie->id);
    }

    public function displayEditMovie(Movie $movie){
        return view("media.movies.edit-movie", ['movie' => $movie]);
    }

    public function editSingleMovie(Request $request, Movie $movie){
        $request->validate([
            'title' => ['required'],
            'year_watched' => ['required']
        ]);

        $movie = Movie::findOrFail($movie->id);

        $movie->update([
            'title' => request('title'),
            'year_watched' => request('year_watched'),
            'form' => request('form'),
        ]);
        
        return redirect('/archive/movies/' . $movie->id);
    }

    public function deleteSingleMovie(Movie $movie){
        // Authorization inc
        $movie->delete();
        return redirect('/archive/movies');
    }

}
