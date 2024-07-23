<?php

namespace App\Http\Controllers;


use App\Mail\NewEntryGame;
use App\Models\Games;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class GamesController extends Controller
{
    public function displayAll(){
        $games = Games::all();
        $gamesSorted = $games->sortDesc();
        return view("media/games/games",    ["games" => $gamesSorted ]);
    }

    public function displaySingleGame(Games $game){
        return view("media/games/single-game",    ["game" => $game]);
    }

    public function displayCreate(){
        return view("media.games.create-game");
    }

    public function displayEditGame(Games $game){
        // $game = Games::find($id);
        return view("media.games.edit-game", ['game' => $game]);
    }

    public function createGame(Request $request){
        $request->validate([
            'title' => ['required']
        ]);

        $game = Games::create([
            'title' => request('title'),
            'year_played' => request('year_played'),
            'status' => request('status'),
            'additional_info' => request('additional_info')
        ]);

        Mail::to("qingquestatus@outlook.com")->queue(new NewEntryGame($game));

        return redirect('/archive/games/' . $game->id);
    }

    public function editSingleGame(Request $request, Games $game){
        $request->validate([
            'title' => ['required']
        ]);

        $game = Games::findOrFail($game->id);

        $game->update([
            'title' => request('title'),
            'year_played' => request('year_played'),
            'status' => request('status'),
            'additional_info' => request('additional_info'),
        ]);
        
        return redirect('/archive/games/' . $game->id);

    }

    public function deleteSingleGame(Games $game){
        // Authorization
        $game->delete();
        return redirect('/archive/games');
    }
}
