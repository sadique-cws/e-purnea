<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Category,Business};

class HomeController extends Controller
{
    //

    public function homepage(){
        $data['business']=Business::all();
        return view("home",$data);
    }

    public function add_biz(){
        $data['categories']  = Category::all();
        return view("add-biz",$data);
    }
}
