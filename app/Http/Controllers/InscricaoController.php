<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscricaoController extends Controller
{
    public function inscricaoIndex() {
        return view('inscricao-usuario');
    }

    public function inscricaoInstrucao() {
       return view('instrucoes-inscricao');
    }
        //enviar o formulário de incricao
//  public function inscricaoSubmitPost (InscritoRequest $request) 
//  {
        //
//  }
}
