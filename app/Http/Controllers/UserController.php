<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function displayRegister(){
        return view("user/register");
    }

    public function createUser(){
        dd(request()->all());
    }

    public function displayLogin(){
        return view("user/login");
    }

    public function createLogin(){
        dd(request()->all());
    }
}
