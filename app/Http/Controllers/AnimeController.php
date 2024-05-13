<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    public function displayAll(){
        $animes = Anime::where('form', 'Anime')->get();
        $animeSorted = $animes->sortDesc();
        $mangas = Anime::where('form', 'Manga')->get();
        $mangasSorted = $mangas->sortDesc();
        return view("media/anime/anime", [  
                                            "animes" => $animeSorted,
                                            "mangas" => $mangasSorted 
                                            ]);
    }

    public function displaySingleAnime(Anime $anime){
        return view("media/anime/single-anime",    ["anime" => $anime]);
    }

    public function displayCreate(){
        return view("media.anime.create-anime");
    }

    public function createAnime(){
        Anime::create([
            'title' => request('title'),
            'year_watched' => request('year_watched'),
            'form' => request('form'),
        ]);
        return redirect('/archive/anime');
    }


}
