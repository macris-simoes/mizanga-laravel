<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AbstractEvaluations;
use App\Http\Requests\AbstractEvaluationsRequest;

class pareceristaController extends Controller
{
    public function pareceristaIndex() {
        return view('parecerista-home');
    }
    public function pareceristaAvaliar() {
        return view('parecerista-avaliar-trabalho');
    }

    public function pareceristaAvaliarSubmitPost(AbstractEvaluationsRequest $request) {
        $dados=$request->all();
        $newParecer=new AbstractEvaluations();
        $newParecer-> fill($dados);
        $newParecer-> save();
        return view('parecerista-avaliar-trabalho');
    }
}
