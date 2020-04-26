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

        $trabalhosReprovados = AbstractEvaluation::leftJoin('abstract_submissions','abstract_evaluations.submission_id','=', 'abstract_submissions.id')->where('referee_id','=',Auth::user()->id)->where('rate_work','=','Recusado')->get();

        return view('parecerista-home')->with(['trabalhosPendentes'=>$trabalhosPendentes, 'trabalhosAprovados'=>$trabalhosAprovados, 'trabalhosReprovados'=>$trabalhosReprovados]);
    }
    public function avaliar($submission_id) {

        $dadosTrabalho = AbstractSubmission::leftJoin('axis_configs','axis_configs.id','=','abstract_submissions.axis_id')
        ->where('abstract_submissions.id','=',$submission_id)
        ->select('abstract_submissions.*','axis_configs.axis')
        ->first();

        return view('parecerista-avaliar-trabalho')->with(['dadosTrabalho'=>$dadosTrabalho,'submission_id'=>$submission_id]);
    }

    public function avaliarPost(AbstractEvaluationsRequest $request, $submission_id) {
        
        if ($request->hasFile('include_evaluation') && $request->file('include_evaluation')->isValid()) {
           
            $path = $request->file('include_evaluation')->store('pareceres', 'public');
            
            if ( !$path ){
                return redirect()->route('parecerista.avaliar')->with('erro','Falha ao salvar o arquivo.');
            } else{

                $avaliacao = $request->rate_work;

                AbstractEvaluation::where('submission_id','=',$submission_id)
                ->update(['rate_work'=>$avaliacao,'include_evaluation'=>$path]);

            }
        } else{
            return redirect()->route('parecerista.avaliar')->with('erro','Falha ao salvar o arquivo.');
        }
        return redirect()->route('parecerista.home',['submission_id'=>$submission_id])->with('mensagem','Avaliação efetuada com sucesso.');
    }
}
