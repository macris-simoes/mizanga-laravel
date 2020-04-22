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
    public function home(Registration $inscrito) {
    
        return view('inscrito-home', ['inscrito' => $inscrito]);
    }
    public function certificados() {
        return view('inscrito-certificados');
    }
    public function enviar() {
        $eixos = AxisConfig::all();
        $modals = AbstractConfig::all();
        return view('inscrito-enviar-trabalho', ['eixos' => $eixos, 'modals' => $modals]);
    }

    public function enviarPost(AbstractSubmissionsRequest $request, Registration $inscrito) {
        $dados = $request->all();
        $novoTrabalho = new AbstractSubmission();
        $novoTrabalho->registration_id = $inscrito->id;
        $novoTrabalho -> fill($dados);
        $novoTrabalho ->save();
        
        return redirect()->route('trabalho.enviar',['inscrito' => $inscrito])->with('mensagem','Trabalho enviado com sucesso.');
    }

    public function enviados() {
        return view('inscrito-trabalhos-cadastrados');
    }
}
