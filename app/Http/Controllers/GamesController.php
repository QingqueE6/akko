<?php

namespace App\Http\Controllers;

use App\Models\Games;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function displayAll(){
        $games = Games::all();
        return view("media/games/games",    ["games" => $games ]);
    }

    public function displaySingleGame(Games $game){
        // $games = Games::all();
        return view("media/games/single-game",    ["game" => $game]);
    }
}
