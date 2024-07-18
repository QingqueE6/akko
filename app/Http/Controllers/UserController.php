<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function displayRegister(){
        return view("user/register");
    }

    public function createUser(){
        $validateAttributes = request()->validate([
            "name"=> ['required'],
            "email"=> ['required', 'email'],
            "password"=> ['required', 'confirmed']
        ]); 
        $user = User::create($validateAttributes);
        // User::create([
        //     "name" => request("name"),
        //     "email"=> request("email"),
        //     "password"=> bcrypt(request("password")),
        // ]);   
        Auth::login($user); 
        return redirect("/");  
    }

    public function displayLogin(){
        return view("user/login");
    }

    public function createLogin(){
        $validateAttributes = request()->validate([
            "name"=> ['required'],
            "password"=> ['required']
        ]);
        if(!Auth::attempt($validateAttributes)){
            throw ValidationException::withMessages([
                "name" => "Your login information is wrong."
            ]);
        };

        request()->session()->regenerate();

        return redirect('/');
    }
    public function logoutUser(){ 
        Auth::logout();
        return redirect("/");
    }
}
