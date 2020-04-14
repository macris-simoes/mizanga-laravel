<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\AttendeeConfig;
use App\RefereeConfig;
use App\AxisConfig;
use App\AxisReferee;


class adminController extends Controller
{
    //HOME
    public function adminHome()
    {
        return view('admin-home');
    }

    public function adminCongresso()
    {
        return view('admin-config-congresso');
    }

    public function adminEixo()
    {
        return view('admin-config-eixos');
    }


    // INSCRITOS
    public function adminConfigInscrito()
    {
        return view('admin-config-inscrito');
    }
    public function adminInscrito()
    {
        return view('admin-inscrito');
    }

    public function adminInscritoShowA()
    {
        return view('admin-inscrito-showa');
    }
    
    public function adminInscritoShowB()
    {
        return view('admin-inscrito-showb');
    }


    //TRABALHOS
    public function adminConfigTrabalho()
    {
        return view('admin-config-trabalho');
    }
    public function adminTrabalho()
    {
        return view('admin-trabalho');
    }

    public function adminTrabalhoShowA()
    {
        return view('admin-trabalho-showa');
    }
    


    //PARECERISTA
    public function adminConfigParecerista()
    {
        return view('admin-config-parecerista');
    }

    public function configPareceristaSubmitPost(Request $request){
        //Inserindo o parecerista na tabela users
        $novoUser = new User();
        $novoUser->name = $request->appraiser_name;
        $novoUser->email = $request->appraiser_email;
        $novoUser->password = bcrypt($request->appraiser_cpf);
        $novoUser->type = 'parecerista';
        $novoUser->save();

        //Inserindo os dados do parecerista na tabela referee_configs
        $camposParecerista=$request->only('appraiser_cpf', 'appraiser_name','appraiser_email');
        $novoParecerista = new RefereeConfig();
        $novoParecerista->fill($camposParecerista);
        $novoParecerista->user_id = $novoUser->id;
        $novoParecerista->admin_id = 1;
        $novoParecerista->save();
        //COLOCAR LOGICA PARA O CAMPO ADMIN_ID!!!
        
        $campos=$request->all();
        foreach($campos as $key=>$value){
            if(strpos($key,'axis_')!== FALSE){
                if($value!=0){
                    $novoPareceristaEixo = new AxisReferee();
                    $novoPareceristaEixo->referee_id = $novoParecerista->id;
                    $novoPareceristaEixo->axis_id = $value;
                    $novoPareceristaEixo->save();
                }
            }
        }

    }

    public function adminParecerista()
    {
        return view('admin-parecerista');
    }
    public function adminPareceristaShowA()
    {
        return view('admin-parecerista-showa');
    }
    public function adminPareceristaShowB()
    {
        return view('admin-parecerista-showb');
    }


    public function adminPareceristaSubstituir()
    {
        return view('admin-parecerista-substituir');
    }








    public function adminInscritoSubmitPost(Request $request)
    {
        $dados = $request->all();
        $novaModalidade = new AttendeeConfig();
        $novaModalidade->fill($dados);
        $novaModalidade->save();
        return "Dados salvo com sucesso";
    }
}
