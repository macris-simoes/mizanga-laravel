<?php

namespace App\Http\Controllers;

use App\AbstractConfig;
use Illuminate\Http\Request;
use App\User;
use App\AttendeeConfig;
use App\RefereeConfig;
use App\AxisConfig;
use App\AxisReferee;


class AdminController extends Controller
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
        $eixos = AxisConfig::query()->paginate();
        return view("admin-config-eixos", ["eixos"=>$eixos]);
    }

    public function adminEixoSubmitPost(Request $request){
        $eixo = $request->all();
        $novoEixo = new AxisConfig();
        $novoEixo->fill($eixo);
        $novoEixo->admin_id = 1;
        //INSERIR LOGICA PARA PEGAR ADMIN_ID
        $novoEixo->save();

        return redirect('/admin-config-eixos')->with('mensagem','Novo eixo salvo com sucesso.');
    }


    // INSCRITOS
    public function adminConfigInscrito() {

        $modals = AttendeeConfig::query()->paginate();
        return view('admin-config-inscrito', ["modals" => $modals]);
    }

    public function adminConfigInscritoPost(Request $request) {

        $postModal = $request->all();
        $newModal = new AttendeeConfig();
        $newModal->fill($postModal);
        $newModal->admin_id = 1;
        $newModal->save();

        return redirect('admin-config-inscrito');
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

    public function adminConfigTrabalho() {

        $modals = AbstractConfig::query()->paginate();
        return view('admin-config-trabalho', ["modals" => $modals]);
    }
    public function adminConfigTrabalhoPost(Request $request) {

        $modal = $request->all();
        $newModal = new AbstractConfig();
        $newModal->fill($modal);
        $newModal->admin_id = 1;
        $newModal->save();        

        return redirect('admin-config-trabalho');
    }
    public function adminTrabalho(){   
        return view('admin-trabalho');
    }

    public function adminTrabalhoShowA()
    {
        return view('admin-trabalho-showa');
    }
    


    //PARECERISTA
    public function adminConfigParecerista()
    {
        $eixos = AxisConfig::all();
        return view("admin-config-parecerista", ["eixos"=>$eixos]);
        //return view('admin-config-parecerista');
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
        return redirect('/admin-config-parecerista')->with('mensagem','Novo parecerista salvo com sucesso.');


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
