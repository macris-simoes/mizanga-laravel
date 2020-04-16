<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginIndex() {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->type == "admin"){
                return redirect()->intended('admin-home');
            } else if(Auth::user()->type == "parecerista"){
                return redirect()->intended('parecerista');
            } else if(Auth::user()->type == "inscrito"){
                return redirect()->intended('inscrito-home');
            }
        } else{
            return redirect('/login')->with('mensagem','Email ou senha incorretos!');
        }
    }
}
