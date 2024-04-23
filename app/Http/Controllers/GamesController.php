<?php

namespace App\Http\Controllers;

use App\Models\Games;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function display(){
        $games = Games::all();
        return view("games",    ["games" => $games ]);
    }
}
