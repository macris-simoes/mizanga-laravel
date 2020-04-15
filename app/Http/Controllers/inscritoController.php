<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AxisConfig;
use App\AbstractConfig;

class inscritoController extends Controller
{
    public function inscritoInfo() {
        return view('inscrito-home');
    }
    public function certificados() {
        return view('inscrito-certificados');
    }
    public function enviarTrabalho() {
        $eixos = AxisConfig::query()->paginate();
        $modals = AbstractConfig::query()->paginate();
        return view('inscrito-enviar-trabalho', ["eixos" => $eixos, "modals" => $modals]);
    }

    public function enviarTrabalhoSubmitPost() {
    
    }

    public function trabalhosCadastrados() {
        return view('inscrito-trabalhos-cadastrados');
    }
}
