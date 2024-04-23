<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    public function display(){
        $animes = Anime::all();
        return view("anime",    ["animes" => $animes ]);
    }
}
