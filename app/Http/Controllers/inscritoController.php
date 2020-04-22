<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AxisConfig;
use App\AbstractConfig;
use App\AbstractSubmission;
use App\Http\Requests\AbstractSubmissionsRequest;
use App\Registration;
use Illuminate\Support\Facades\Auth;


class inscritoController extends Controller
{
    public function home() {
        $user_id = Auth::user()->id;
        $inscrito = Registration::leftjoin('users', 'users.id', '=', 'registrations.user_id')
                    ->where('registrations.user_id', '=', $user_id)->first();
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

    public function enviarPost(AbstractSubmissionsRequest $request) {
        
        $dados = $request->all();
        $novoTrabalho = new AbstractSubmission();
        $novoTrabalho->registration_id = Auth::user()->id;
        $novoTrabalho -> fill($dados);
        $novoTrabalho ->save();
        
        return redirect()->route('trabalho.enviar')->with('mensagem','Trabalho enviado com sucesso.');
    }

    public function enviados() {
        return view('inscrito-trabalhos-cadastrados');
    }
}
