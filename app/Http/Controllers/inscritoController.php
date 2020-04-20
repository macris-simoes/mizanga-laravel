<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AxisConfig;
use App\AbstractConfig;
use App\AbstractSubmission;
use App\Http\Requests\AbstractSubmissionsRequest;
use App\Registration;

class inscritoController extends Controller
{
    public function inscritoInfo(Registration $reg = null) {
    
        return view('inscrito-home', ['reg' => $reg]);
    }
    public function certificados() {
        return view('inscrito-certificados');
    }
    public function enviarTrabalho() {
        $eixos = AxisConfig::query()->paginate();
        $modals = AbstractConfig::query()->paginate();
        return view('inscrito-enviar-trabalho', ["eixos" => $eixos, "modals" => $modals]);
    }

    public function enviarTrabalhoSubmitPost(AbstractSubmissionsRequest $request) {
        $dados = $request->all();
        $novoTrabalho = new AbstractSubmission();
        $novoTrabalho -> fill($dados);
        $novoTrabalho ->save();
        return view('inscrito-enviar-trabalho');
    }

    public function trabalhosCadastrados() {
        return view('inscrito-trabalhos-cadastrados');
    }
}
