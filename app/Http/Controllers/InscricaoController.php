<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InscricaoRequest;

use App\User;
use App\Registration;
use App\AttendeeConfig;

class InscricaoController extends Controller
{
    public function inscricaoIndex() {
        $modalidades = AttendeeConfig::all();
        return view("inscricao-usuario", ["modalidades"=>$modalidades]);
    }

    public function inscricaoInstrucao() {
       return view('instrucoes-inscricao');
    }
    //enviar o formulário de incricao
    public function inscricaoSubmitPost (InscricaoRequest $request) 
    {
        if ($request->hasFile('file') && $request->file('file')->isValid()) {
           
            $path = $request->file('file')->store('comprovantes', 'public');

            if ( !$path ){

                return redirect('/inscricao-usuario')->with('erro','Falha ao salvar o arquivo.');

            } else{
                
                $novoUser = new User();
                $novoUser->name = $request->name;
                $novoUser->email = $request->email;
                $novoUser->password = bcrypt($request->cpf);
                $novoUser->type = 'inscrito';
                $novoUser->save();

                $dados = $request->all();
                $novoInscrito = new Registration();
                $novoInscrito->fill($dados);
                $novoInscrito->user_id = $novoUser->id;
                $novoInscrito->file = $path;
                
                $novoInscrito->save();

                return redirect('/inscricao-usuario')->with('mensagem','Cadastro realizado com sucesso.');
            }

        }

    }
}
