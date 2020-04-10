<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AttendeeConfig;

class adminController extends Controller
{
    //HOME
    public function adminHome()
    {
        return view('admin-home');
    }

    public function adminCongresso()
    {
        return view('admin-config-congresso');
    }


    // INSCRITOS
    public function adminConfigInscrito()
    {
        return view('admin-config-inscrito');
    }
    public function adminInscrito()
    {
        return view('admin-inscrito');
    }


    //TRABALHOS
    public function adminConfigTrabalho()
    {
        return view('admin-config-trabalho');
    }
    public function adminTrabalho()
    {
        return view('admin-trabalho');
    }

    //PARECERISTA
    public function adminConfigParecerista()
    {
        return view('admin-config-parecerista');
    }
    public function adminParecerista()
    {
        return view('admin-parecerista');
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
