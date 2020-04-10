<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AttendeeConfig;

class adminController extends Controller
{
    public function adminHome()
    {
        return view('admin-home');
    }

    public function adminCongresso()
    {
        return view('admin-config-congresso');
    }
    public function adminInscrito()
    {
        return view('admin-config-inscrito');
    }
    public function adminTrabalho()
    {
        return view('admin-config-trabalho');
    }
    public function adminParecerista()
    {
        return view('admin-config-Parecerista');
    }








    public function adminInscritoSubmitPost(Request $request)
    {
        $dados = $request->all();
        $novaModalidade = new AttendeeConfig();
        $novaModalidade->fill($dados);
        $novaModalidade->save();
        return "Dados salvo com sucesso";
    }
}
