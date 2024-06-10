<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Games;
use App\Models\Movie;
use Illuminate\Http\Request;

class HomefeedController extends Controller
{
    public function displayAllContent(){
        $games = Games::all();
        $gamesSorted = $games->sortDesc();
        $movies = Movie::where('form', 'Movie')->get();
        $moviesSorted = $movies->sortDesc();
        $series = Movie::where('form', 'Series')->get();
        $seriesSorted = $series->sortDesc();
        $animes = Anime::where('form', 'Anime')->get();
        $animeSorted = $animes->sortDesc();
        $mangas = Anime::where('form', 'Manga')->get();
        $mangasSorted = $mangas->sortDesc();
        return view("welcome", [  
                                            "animes" => $animeSorted,
                                            "mangas" => $mangasSorted,
                                            "movies" => $moviesSorted,
                                            "series" => $seriesSorted,
                                            "games" => $gamesSorted
                                            ]);
    }
    
}
