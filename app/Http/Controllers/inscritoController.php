<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AxisConfig;
use App\AbstractConfig;
use App\AbstractSubmission;
use App\ConferenceConfig;
use App\Http\Requests\AbstractSubmissionsRequest;
use App\Registration;
use Illuminate\Support\Facades\Auth;


class inscritoController extends Controller
{
    public function home() {
        $user_id = Auth::user()->id;
        $end_date = ConferenceConfig::select('conference_configs.event_end_date')->first();
        $inscrito = Registration::leftjoin('users', 'users.id', '=', 'registrations.user_id')
                    ->where('registrations.user_id', '=', $user_id)->first();
        return view('inscrito-home', ['inscrito' => $inscrito, 'end_date' => $end_date]);
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
        $user_id = Auth::user()->id;
        $trabalhos = AbstractSubmission::leftjoin('registrations', 'registrations.id', '=', 'abstract_submissions.registration_id')
        ->leftjoin('axis_configs', 'axis_configs.id', '=', 'abstract_submissions.axis_id')
        ->leftjoin('abstract_evaluations', 'abstract_evaluations.submission_id', '=', 'abstract_submissions.id')
        ->select('abstract_submissions.*','axis_configs.axis','abstract_evaluations.rate_work')
        ->where('abstract_submissions.registration_id', '=', $user_id)->get();

        return view('inscrito-trabalhos-cadastrados', ['trabalhos' => $trabalhos]);
    }
}
