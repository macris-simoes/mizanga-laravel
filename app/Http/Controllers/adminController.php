<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AttendeeConfig;

class adminController extends Controller
{
    public function adminIndex() {
        return view('admin-tabs');
        return view('admin-congresso-pills');
    }

    public function adminInscritoSubmitPost(Request $request) {
        $dados=$request->all();
        $novaModalidade=new AttendeeConfig();
        $novaModalidade-> fill($dados);
        $novaModalidade-> save();
        return "Dados salvo com sucesso";
    }
}
