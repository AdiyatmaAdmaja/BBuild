<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index_profile(){
        return view('profile',[
            "user" => User::first(),
            "gambar" => "../img/default.jpeg"
        ]);
    }

}
