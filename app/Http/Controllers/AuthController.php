<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //

    public function login(){
        echo "login page";
    }
    public function register(Request $req){

        if($req->isMethod("post")){
            $data = $req->validate([
                'name' => 'required',
                'email' => 'required',
                'contact' => 'required',
                'password' => 'required',
            ]);

            User::create($data);
            return redirect()->route('login');
        }
        return view("register");
    }
    public function logout(){
        echo "logout page";
    }
}
