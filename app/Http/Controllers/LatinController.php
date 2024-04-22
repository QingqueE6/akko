<?php

namespace App\Http\Controllers;

use App\Models\Latin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LatinController extends Controller
{
    public function display(){
        $data = Latin::all();
        return view("latin",    ["data" => $data ]);
    }
}
