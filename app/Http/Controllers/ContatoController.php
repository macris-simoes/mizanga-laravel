<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contatoIndex() {
        return view('contato');
    }
}

      //enviar o formulário de contato??
//public function contatoSubmitPost (ContatoRequest $request) 
//{
   //
//}