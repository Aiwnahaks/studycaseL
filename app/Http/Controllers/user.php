<?php

namespace App\Http\Controllers;
use \App\Models\User;
use Illuminate\Http\Request;

class user extends Controller
{
    public function register(){
        return view('register');
    }
}
