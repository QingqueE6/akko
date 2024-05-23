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
        return view("media/games/single-game",    ["game" => $game]);
    }

    public function displayCreate(){
        return view("media.games.create-game");
    }

    public function displayEditGame($id){
        $game = Games::find($id);
        return view("media.games.edit-game", ['game' => $game]);
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

    public function editSingleGame(Request $request, $id){
        $request->validate([
            'title' => ['required']
        ]);

        $game = Games::findOrFail($id);

        $game->update([
            'title' => request('title'),
            'year_played' => request('year_played'),
            'status' => request('status'),
            'additional_info' => request('additional_info'),
        ]);
        
        return redirect('/archive/games/' . $game->id);

    }

    public function deleteSingleGame(Request $request, $id){
        Games::findOrFail($id)->delete();
        return redirect('/archive/games');
    }
}
