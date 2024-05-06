<?php

namespace App\Http\Controllers;

use App\Models\Latin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LatinController extends Controller
{
    public function displayAll(){
        $data = Latin::all();
        return view("latin/latin",    ["data" => $data ]);
    }
}
