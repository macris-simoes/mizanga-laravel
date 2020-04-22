<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login() {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            $perfil = Auth::user()->type;

            if ($perfil == '100' || $perfil == '101' || $perfil == '110' || $perfil == '111'){
                
                return redirect()->intended('admin/');

            } else if($perfil == '010' || $perfil == '110' || $perfil == '011'){

                return redirect()->intended('parecerista/');

            } else if($perfil == '001'){

                return redirect()->intended('inscrito/');

            }
        } else{
            return redirect('/login')->with('mensagem','Email ou senha incorretos!');
        }
    }

    public function logout() {

        Auth::logout();

        return redirect('/login');

    }
}