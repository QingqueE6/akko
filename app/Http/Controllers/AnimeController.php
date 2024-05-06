<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    public function displayAll(){
        $animes = Anime::all();
        return view("media/anime/anime",    ["animes" => $animes ]);
    }

    public function displaySingleAnime(Anime $anime){
        return view("media/anime/single-anime",    ["anime" => $anime]);
    }
}
