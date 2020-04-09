<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AbstractEvaluations;

class pareceristaController extends Controller
{
    public function pareceristaIndex() {
        return view('parecerista-tabs');
    }

    public function pareceristaSubmitPost(Request $request) {
        $dados=$request->all();
        $newModalidade=new AbstractEvaluations();
        $newModalidade-> fill($dados);
        $newModalidade-> save();
        return "Dados salvo com sucesso";
    }
}
