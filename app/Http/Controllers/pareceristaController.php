<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AbstractEvaluation;
use App\Http\Requests\AbstractEvaluationsRequest;

class pareceristaController extends Controller
{
    public function home() {
        return view('parecerista-home');
    }
    public function avaliar() {
        return view('parecerista-avaliar-trabalho');
    }

    public function avaliarPost(AbstractEvaluationsRequest $request) {
        $dados = $request->all();
        $newParecer = new AbstractEvaluation();
        $newParecer-> fill($dados);
        $newParecer-> save();
        return view('parecerista-avaliar-trabalho');
    }
}
