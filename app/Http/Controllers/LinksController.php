<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinksController extends Controller
{
    //

    public function criteriosTrabalho() {
        return view('link-criterios-trabalho');
    }

    public function instrucaoAvaliadores() {
        return view('link-instrucao-avaliadores');
    }

}
