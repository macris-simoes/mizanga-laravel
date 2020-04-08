<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InscricaoRequest;

use App\Registration;

class InscricaoController extends Controller
{
    public function inscricaoIndex() {
        return view('inscricao-usuario');
    }

    public function inscricaoInstrucao() {
       return view('instrucoes-inscricao');
    }
    //enviar o formulário de incricao
    public function inscricaoSubmitPost (InscricaoRequest $request) 
    {
        $dados = $request->all();
        $novoInscrito = new Registration();
        $novoInscrito -> fill($dados);
        $novoInscrito ->save();
        //dd($dados);
        return "Usuário adicionado com sucesso";
        
    }
}
