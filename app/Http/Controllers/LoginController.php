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
            if (Auth::user()->type == "admin"){

                // $id_admin = Auth::user()
                //             ->leftJoin('admins', 'admins.user_id', '=', 'users.id')
                //             ->select('admins.id')->first();
                // return redirect()->intended('admin/'.$id_admin['id']);
                
                return redirect()->intended('admin/');

            } else if(Auth::user()->type == "parecerista"){

                // $id_parecerista = Auth::user()
                //             ->leftJoin('referee_configs', 'referee_configs.user_id', '=', 'users.id')
                //             ->select('referee_configs.id')->first();
                // return redirect()->intended('parecerista/'.$id_parecerista['id']);
                
                return redirect()->intended('parecerista/');
            } else if(Auth::user()->type == "inscrito"){

                $id_inscrito = Auth::user()
                            ->leftJoin('registrations', 'registrations.user_id', '=', 'users.id')
                            ->select('registrations.id')->first();
                return redirect()->intended('inscrito/'.$id_inscrito['id']);

                // return redirect()->intended('inscrito/');
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