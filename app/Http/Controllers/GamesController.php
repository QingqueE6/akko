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

    public function displayCreate(){
        return view("media.games.create-game");
    }

    public function createGame(){
        Games::create([
            'title' => request('title'),
            'year_played' => request('year_played'),
            'status' => request('status'),
            'additional_info' => request('additional_info')
        ]);
        return redirect('/archive/games');
    }
}
