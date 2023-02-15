<?php

namespace App\Http\Controllers;
use \App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class login_C extends Controller
{
    public function register(){
        return view('register');
    }

    public function regis(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
    
        return view('/login');
    }
    
    public function Login(){
        return view ('login');
    }
    
    public function pogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect('/dashboard');
        }

        return back()->withErrors([
            'password' => 'Username Atau Password Salah',
        ]);
    }
}
