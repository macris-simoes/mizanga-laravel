<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inscritoController extends Controller
{
    public function inscritoInfo() {
        return view('inscrito-home');
    }
    public function certificados() {
        return view('inscrito-certificados');
    }
    public function enviarTrabalho() {
        return view('inscrito-enviar-trabalho');
    }
    public function trabalhosCadastrados() {
        return view('inscrito-trabalhos-cadastrados');
    }
}
