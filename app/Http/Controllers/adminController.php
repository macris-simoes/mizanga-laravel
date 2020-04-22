<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\AbstractConfig;
use Illuminate\Http\Request;
use App\User;
use App\AttendeeConfig;
use App\RefereeConfig;
use App\AxisConfig;
use App\AxisReferee;
use App\Admin;
use App\Registration;
use App\Http\Requests\ConferenceConfigRequest;
use App\Http\Requests\AxisConfigRequest;
use App\Http\Requests\AttendeeConfigRequest;
use App\Http\Requests\AbstractConfigRequest;
use App\Http\Requests\RefereeConfigRequest;
use App\AbstractSubmission;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function cadastroAdmin(){
        return view('admin-cadastro');
    }

    public function cadastroAdminSubmitPost(Request $request){

        $jaInscrito = Registration::where('cpf', '=', $request->cpf)->first();
        $jaParecerista = RefereeConfig::where('appraiser_cpf', '=', $request->cpf)->first();

        //se o admin ainda não existe no sistema
        if(!isset($jaInscrito) && !isset($jaParecerista)){

            //Inserindo novo admin na tabela users
            $novoUser = new User();
            $novoUser->name = $request->name;
            $novoUser->email = $request->email;
            $novoUser->password = bcrypt($request->cpf);
            $novoUser->type = '100';
            $novoUser->save();

        } else if(isset($jaInscrito) && isset($jaParecerista)){
            
            //se o admin já for inscrito e parecerista, dá um update na coluna type
            $id = $jaInscrito->user_id;
            $update = User::where('id', $id) -> update(['type' => '111']);

        } else if(isset($jaInscrito)){

            //se o admin já for um inscrito
            $id = $jaInscrito->user_id;
            $update = User::where('id', $id) -> update(['type' => '101']);

        }else if(isset($jaParecerista)){

            //se o admin já for um parecerista
            $id = $jaParecerista->user_id;
            $update = User::where('id', $id) -> update(['type' => '110']);
        }

        //Inserindo os dados do admin na tabela admins
        $camposAdmin=$request->all();
        $novoAdmin = new Admin();
        $novoAdmin->fill($camposAdmin);

        if(isset($id)){
            $novoAdmin->user_id = $id;
        } else{
            $novoAdmin->user_id = $novoUser->id;
        }

        $novoAdmin->save();

        return redirect('/admin-cadastro')->with('mensagem','Novo Admin com sucesso.');

    }


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

    public function adminEixoSubmitPost(AxisConfigRequest $request){
        $eixo = $request->all();
        $novoEixo = new AxisConfig();
        $novoEixo->fill($eixo);
        $novoEixo->admin_id = Auth::user()->id;
        $novoEixo->save();

        return redirect('/admin-config-eixos')->with('mensagem','Novo eixo salvo com sucesso.');
    }

    public function adminConfigEixoDelete(AxisConfig $id){
        $id -> delete();
       return redirect('/admin-config-eixos')->with('mensagem','Eixo apagado!');        
    }


    // INSCRITOS
    public function adminConfigInscrito() {

        $modals = AttendeeConfig::query()->paginate();
        return view('admin-config-inscrito', ["modals" => $modals]);
    }

    public function adminConfigInscritoPost(AttendeeConfigRequest $request) {

        $postModal = $request->all();
        $newModal = new AttendeeConfig();
        $newModal->fill($postModal);
        $newModal->admin_id = Auth::user()->id;
        $newModal->save();

        return redirect('admin-config-inscrito');
    }

    public function adminConfigInscritoDelete(AttendeeConfig $id){
        $id -> delete();
       return redirect('/admin-config-inscrito')->with('mensagem','Apagado!');        
    }

    public function adminInscrito()
    {
        $totalInscritos = Registration::count();
        $inscritos = DB::table('registrations')
                    ->leftJoin('attendee_configs', 'registrations.register_modality', '=', 'attendee_configs.id')
                    ->select('registrations.*', 'attendee_configs.register_modality')->simplePaginate(10);
        return view('admin-inscrito')->with('totalInscritos', $totalInscritos)->with('inscritos', $inscritos);
    }

    public function adminInscritoShowA($id)
    {
        $inscrito = Registration::leftJoin('attendee_configs', 'registrations.register_modality', '=', 'attendee_configs.id')
                    ->select('registrations.*', 'attendee_configs.register_modality')
                    ->where('registrations.id', '=', $id)->first();
        return view('admin-inscrito-showa', ["inscrito" => $inscrito]);
    }
    
    public function adminInscritoShowB($id)
    {
        $trabalhos = AbstractSubmission::leftJoin('registrations', 'abstract_submissions.registration_id', '=', 'registrations.id')
                    ->leftJoin('axis_configs', 'abstract_submissions.axis_id', '=', 'axis_configs.id')
                    ->leftJoin('attendee_configs', 'registrations.register_modality', '=', 'attendee_configs.id')
                    ->leftJoin('abstract_evaluations', 'abstract_evaluations.submission_id', '=', 'abstract_submissions.id')
                    ->select('abstract_submissions.*','registrations.name','registrations.register_modality', 'axis_configs.axis', 'attendee_configs.register_modality','abstract_evaluations.rate_work')
                    ->where('registrations.id', '=', $id)->simplePaginate(1);
        $inscrito = Registration::leftJoin('attendee_configs', 'registrations.register_modality', '=', 'attendee_configs.id')
                    ->select('registrations.*', 'attendee_configs.register_modality')
                    ->where('registrations.id', '=', $id)->first();
        

        return view('admin-inscrito-showb', ["trabalhos" => $trabalhos, "inscrito" => $inscrito]);
    }

    //Congresso
    public function adminCongressoPost(ConferenceConfigRequest $request)
    {
        // $congresso = $request->all();
        // $newCongresso = new ConferenceConfig();
        // $newCongresso->fill($congresso);
        // $newCongresso->save();  
        return "Congresso cadastrado com sucesso";      
    }

    //TRABALHOS

    public function adminConfigTrabalho() {

        $modals = AbstractConfig::query()->paginate();
        return view('admin-config-trabalho', ["modals" => $modals]);
    }
    public function adminConfigTrabalhoPost(AbstractConfigRequest $request) {

        $modal = $request->all();
        $newModal = new AbstractConfig();
        $newModal->fill($modal);
        $newModal->admin_id = Auth::user()->id;
        $newModal->save();        

        return redirect('admin-config-trabalho')->with('mensagem', 'Configurações de trabalho salvas com sucesso.');
    }

    public function adminConfigTrabalhoDelete(AbstractConfig $id){
        $id -> delete();
       return redirect('/admin-config-trabalho')->with('mensagem','Apagado!');        
    }

    public function adminTrabalho(){   
        $totalTrabalhos = AbstractSubmission::count();
        $trabalhos = DB::table('abstract_submissions')->simplePaginate(10);
        return view('admin-trabalho')->with('totalTrabalhos', $totalTrabalhos)->with('trabalhos', $trabalhos);
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

    public function configPareceristaSubmitPost(RefereeConfigRequest $request){
        
        $jaInscrito = Registration::where('cpf', '=', $request->appraiser_cpf)->first();
        $jaAdmin = Admin::where('cpf', '=', $request->appraiser_cpf)->first();
        
        //se o parecerista ainda não existe no sistema
        if(!isset($jaInscrito) && !isset($jaAdmin)){

            //Inserindo o parecerista na tabela users
            $novoUser = new User();
            $novoUser->name = $request->appraiser_name;
            $novoUser->email = $request->appraiser_email;
            $novoUser->password = bcrypt($request->appraiser_cpf);
            $novoUser->type = '010';
            $novoUser->save();

        }else if(isset($jaInscrito) && isset($jaAdmin)){
            
            //se o parecerista já for inscrito e admin, dá um update na coluna type
            $id = $jaInscrito->user_id;
            $update = User::where('id', $id) -> update(['type' => '111']);

        } else if(isset($jaInscrito)){

            //se o parecerista já for um inscrito
            $id = $jaInscrito->user_id;
            $update = User::where('id', $id) -> update(['type' => '011']);

        }else if(isset($jaAdmin)){

            //se o parecerista já for um admin
            $id = $jaAdmin->user_id;
            $update = User::where('id', $id) -> update(['type' => '110']);
        }

        //Inserindo os dados do parecerista na tabela referee_configs
        $camposParecerista=$request->only('appraiser_cpf', 'appraiser_name','appraiser_email');
        $novoParecerista = new RefereeConfig();
        $novoParecerista->fill($camposParecerista);

        if(isset($id)){
            $novoParecerista->user_id = $id;
        } else{
            $novoParecerista->user_id = $novoUser->id;
        }
        // o admin_id vai receber o valor do user_id do admin logado
        $novoParecerista->admin_id = Auth::user()->id;

        $novoParecerista->save();
        
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
        $totalPareceristas = Registration::count();
        $pareceristas = DB::table('referee_configs')->simplePaginate(10);
        return view('admin-parecerista')->with('totalPareceristas', $totalPareceristas)->with('pareceristas', $pareceristas);
    }
    public function adminPareceristaPost()
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
