<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AbstractEvaluation;
use App\AbstractSubmission;
use App\Http\Requests\AbstractEvaluationsRequest;

use Illuminate\Support\Facades\Auth;


class pareceristaController extends Controller
{
    public function home() {
        $trabalhosPendentes = AbstractEvaluation::leftJoin('abstract_submissions','abstract_evaluations.submission_id','=', 'abstract_submissions.id')
        ->where('referee_id','=',Auth::user()->id)
        ->where('rate_work','=','')->whereNotNull('abstract_submissions.id')->get();

        $trabalhosAprovados = AbstractEvaluation::leftJoin('abstract_submissions','abstract_evaluations.submission_id','=', 'abstract_submissions.id')->where('referee_id','=',Auth::user()->id)->where('rate_work','=','Aprovado')->get();

        $trabalhosReprovados = AbstractEvaluation::leftJoin('abstract_submissions','abstract_evaluations.submission_id','=', 'abstract_submissions.id')->where('referee_id','=',Auth::user()->id)->where('rate_work','=','Reprovado')->get();
        
        return view('parecerista-home')->with(['trabalhosPendentes'=>$trabalhosPendentes, 'trabalhosAprovados'=>$trabalhosAprovados, 'trabalhosReprovados'=>$trabalhosReprovados]);
    }
    public function avaliar() {
        return view('parecerista-avaliar-trabalho');
    }

    public function avaliarPost(AbstractEvaluationsRequest $request) {
        $dados = $request->all();
        $newParecer = new AbstractEvaluation();
        $newParecer-> fill($dados);
        $newParecer-> save();
        return view('parecerista-avaliar-trabalho');
    }
}
