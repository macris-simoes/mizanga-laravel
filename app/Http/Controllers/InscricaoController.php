<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InscricaoRequest;

use App\User;
use App\Registration;
use App\AttendeeConfig;
use App\Admin;
use App\RefereeConfig;

class InscricaoController extends Controller
{
    public function inscricaoIndex() {
        $modalidades = AttendeeConfig::where('register_end_date', '>=', date("Y-m-d H:i:s"))
        ->where('register_start_date', '<=', date("Y-m-d H:i:s"))
        ->get();
        return view("inscricao-usuario", ["modalidades"=>$modalidades]);
    }

    public function inscricaoInstrucao() {
       return view('instrucoes-inscricao');
    }
    //enviar o formulário de incricao
    public function inscricaoSubmitPost (InscricaoRequest $request) 
    {

        //conferindo se o inscrito já é admin ou parecerista
        $jaAdmin = Admin::where('cpf', '=', $request->cpf)->first();
        $jaParecerista = RefereeConfig::where('appraiser_cpf', '=', $request->cpf)->first();

        

        //se existe um arquivo sendo submetido no form e o arquivo for valido
        if ($request->hasFile('file') && $request->file('file')->isValid()) {
           
            $path = $request->file('file')->store('comprovantes', 'public');

            if ( !$path ){
               return redirect('/inscricao-usuario')->with('erro','Falha ao salvar o arquivo.');
            } else{
                 
                //se o inscrito ainda nao existe no sistema
                if(!isset($jaAdmin) && !isset($jaParecerista)){

                    $novoUser = new User();
                    $novoUser->name = $request->name;
                    $novoUser->email = $request->email;
                    $novoUser->password = bcrypt($request->cpf);
                    $novoUser->type = '001';
                    $novoUser->save();

                } else if(isset($jaAdmin) && isset($jaParecerista)){

                    //se o inscrito ja for admin e parecerista
                    $id = $jaAdmin->user_id;
                    $update = User::where('id', $id) -> update(['type' => '111']);

                } else if(isset($jaAdmin)){

                    //se o inscrito ja for admin
                    $id = $jaAdmin->user_id;
                    $update = User::where('id', $id) -> update(['type' => '101']);

                } else if(isset($jaParecerista)){

                    //se o inscrito ja for parecerista
                    $id = $jaParecerista->user_id;
                    $update = User::where('id', $id) -> update(['type' => '011']);

                }
                
                $dados = $request->all();
                $novoInscrito = new Registration();
                $novoInscrito->fill($dados);

                if(isset($id)){
                    $novoInscrito->user_id = $id;
                } else{
                    $novoInscrito->user_id = $novoUser->id;
                }
                                
                $novoInscrito->file = $path;                
                $novoInscrito->save();

                return redirect('/inscricao-usuario')->with('mensagem','Cadastro realizado com sucesso.');
            }
            
          //se nao esta sendo submetido um arquivo no form
        } else if(!($request->hasFile('file'))){
            
            //se o inscrito ainda nao existe no sistema
            if(!isset($jaAdmin) && !isset($jaParecerista)){

                $novoUser = new User();
                $novoUser->name = $request->name;
                $novoUser->email = $request->email;
                $novoUser->password = bcrypt($request->cpf);
                $novoUser->type = '001';
                $novoUser->save();

            } else if(isset($jaAdmin) && isset($jaParecerista)){

                //se o inscrito ja for admin e parecerista
                $id = $jaAdmin->user_id;
                $update = User::where('id', $id) -> update(['type' => '111']);

            } else if(isset($jaAdmin)){

                //se o inscrito ja for admin
                $id = $jaAdmin->user_id;
                $update = User::where('id', $id) -> update(['type' => '101']);

            } else if(isset($jaParecerista)){

                //se o inscrito ja for parecerista
                $id = $jaParecerista->user_id;
                $update = User::where('id', $id) -> update(['type' => '011']);

            }
            
            $dados = $request->all();
            $novoInscrito = new Registration();
            $novoInscrito->fill($dados);

            if(isset($id)){
                $novoInscrito->user_id = $id;
            } else{
                $novoInscrito->user_id = $novoUser->id;
            }
                                         
            $novoInscrito->save();

            return redirect('/inscricao-usuario')->with('mensagem','Cadastro realizado com sucesso.');
        }

    }
}
