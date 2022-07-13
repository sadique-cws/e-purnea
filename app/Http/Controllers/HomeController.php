<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    //

    public function homepage(){
        return view("home");
    }

    public function add_biz(){
        $data['categories']  = Category::all();
        return view("add-biz",$data);
    }
}
