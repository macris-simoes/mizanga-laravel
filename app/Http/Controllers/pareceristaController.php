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
        $newParecer=new AbstractEvaluations();
        $newParecer-> fill($dados);
        $newParecer-> save();
        return "Dados salvo com sucesso";
    }
}
