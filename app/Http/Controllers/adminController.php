<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\AbstractConfig;
use App\AbstractEvaluation;
use Illuminate\Http\Request;
use App\User;
use App\AttendeeConfig;
use App\RefereeConfig;
use App\AxisConfig;
use App\AxisReferee;
use App\Admin;
use App\Registration;
use App\ConferenceConfig;
use App\Http\Requests\ConferenceConfigRequest;
use App\Http\Requests\AxisConfigRequest;
use App\Http\Requests\AttendeeConfigRequest;
use App\Http\Requests\AbstractConfigRequest;
use App\Http\Requests\RefereeConfigRequest;
use App\Http\Requests\AdminCadastroRequest;
use App\AbstractSubmission;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //HOME
    public function home()
    {
        $totalInscritos = Registration::count();
        $totalPareceristas = RefereeConfig::count();
        $trabalhosSubmetidos = AbstractSubmission::count();
        $trabalhosAvaliados = AbstractEvaluation::where('rate_work','<>','')->count();
        $congresso = ConferenceConfig::select('name_conference','event_start_date','event_end_date')->first();
        $inscricoesTrabalho = AbstractConfig::orderBy('work_start_date','asc')->select('work_start_date')->first();
    
        return view('admin-home', ['totalInscritos'=> $totalInscritos,'totalPareceristas'=> $totalPareceristas,'trabalhosSubmetidos'=>$trabalhosSubmetidos,'trabalhosAvaliados'=>$trabalhosAvaliados, 'congresso' => $congresso, 'inscricoesTrabalho'=> $inscricoesTrabalho]);
    }


    //CADASTRO ADMIN
    public function cadastro(){
        return view('admin-cadastro');
    }

    public function cadastroPost(AdminCadastroRequest $request){

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

        return redirect('/admin-cadastro')->with('mensagem','Novo cadastro de ADMIN feito com sucesso.');

    }



    //CONFIG CONGRESSO
    public function configCongresso()
    {
        return view('admin-config-congresso');
    }

    public function configCongressoPost(ConferenceConfigRequest $request)
    {
        $congresso = $request->all();
        $newCongresso = new ConferenceConfig();
        $newCongresso->fill($congresso);
        $newCongresso->admin_id = Auth::user()->id;
        $newCongresso->save();  
        return redirect('/admin/config/congresso')->with('mensagem','Informações salvas com sucesso.');   
    }


    //CONFIG EIXO
    public function configEixo()
    {
        $eixos = AxisConfig::all();
        return view("admin-config-eixos", ["eixos"=>$eixos]);
    }

    public function configEixoPost(AxisConfigRequest $request){
        $eixo = $request->all();
        $novoEixo = new AxisConfig();
        $novoEixo->fill($eixo);
        $novoEixo->admin_id = Auth::user()->id;
        $novoEixo->save();

        return redirect('/admin/config/eixos')->with('mensagem','Novo eixo salvo com sucesso.');
    }

    public function eixoDelete(AxisConfig $id){
        $id -> delete();
       return redirect('/admin/config/eixos')->with('mensagem','Eixo apagado!');        
    }


    //CONFIG INSCRITO
    public function configInscrito() {

        $modals = AttendeeConfig::query()->paginate();
        return view('admin-config-inscrito', ["modals" => $modals]);
    }

    public function configInscritoPost(AttendeeConfigRequest $request) {

        $postModal = $request->all();
        $newModal = new AttendeeConfig();
        $newModal->fill($postModal);
        $newModal->admin_id = Auth::user()->id;
        $newModal->save();

        return redirect('/admin/config/inscrito');
    }

    public function inscritoDelete(AttendeeConfig $id){
        $id -> delete();
       return redirect('/admin/config/inscrito')->with('mensagem','Modalidade de inscrição apagada.');        
    }

    //CONFIG TRABALHO
    public function configModalidadeTrabalho() {

        $modals = AbstractConfig::query()->paginate();
        return view('admin-config-trabalho', ["modals" => $modals]);
    }
    public function configModalidadeTrabalhoPost(AbstractConfigRequest $request) {

        $modal = $request->all();
        $newModal = new AbstractConfig();
        $newModal->fill($modal);
        $newModal->admin_id = Auth::user()->id;
        $newModal->save();        

        return redirect('/admin/config/trabalho')->with('mensagem', 'Configurações de trabalho salvas com sucesso.');
    }

    public function modalidadeTrabalhoDelete(AbstractConfig $id){
        $id -> delete();
       return redirect('/admin/config/trabalho')->with('mensagem','Modalidade de trabalho apagado.');        
    }


    //CONFIG PARECERISTA
    public function configParecerista()
    {
        $eixos = AxisConfig::all();
        return view("admin-config-parecerista", ["eixos"=>$eixos]);
    }

    public function configPareceristaPost(RefereeConfigRequest $request){
        
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
                    $novoPareceristaEixo->referee_id = $novoParecerista->user_id;
                    $novoPareceristaEixo->axis_id = $value;
                    $novoPareceristaEixo->save();
                }
            }
        }
        return redirect('/admin/config/parecerista')->with('mensagem','Novo parecerista salvo com sucesso.');


    }

    

    //VER INSCRITOS
    public function listarInscrito()
    {
        $totalInscritos = Registration::count();
        $inscritos = DB::table('registrations')->orderBy('name','asc')->simplePaginate(10);
        return view('admin-inscrito', ['totalInscritos' => $totalInscritos, 'inscritos' => $inscritos]);
    }

    public function listarInscritoInfo($user_id)
    {
        $inscrito = Registration::where('user_id','=',$user_id)->first();
        return view('admin-inscrito-visualizar',['user_id' => $user_id, "inscrito" => $inscrito]);
    }
    
    public function listarInscritoTrabalho($user_id)
    {
        $trabalhos = AbstractSubmission::leftJoin('registrations', 'abstract_submissions.registration_id', '=', 'registrations.user_id')
                    ->leftJoin('axis_configs', 'abstract_submissions.axis_id', '=', 'axis_configs.id')
                    ->leftJoin('attendee_configs', 'registrations.register_modality', '=', 'attendee_configs.id')
                    ->leftJoin('abstract_evaluations', 'abstract_evaluations.submission_id', '=', 'abstract_submissions.id')
                    ->select('abstract_submissions.*','registrations.name','registrations.register_modality', 'axis_configs.axis', 'attendee_configs.register_modality','abstract_evaluations.rate_work')
                    ->where('registrations.user_id', '=', $user_id)->simplePaginate(1);
        
        $inscrito = Registration::where('user_id','=',$user_id)->first();

        return view('admin-inscrito-visualizar-trabalho',['user_id' => $user_id, "trabalhos" => $trabalhos, "inscrito" => $inscrito]);
    }

    public function InscritoSearch(Request $request){
        $totalInscritos = Registration::count();
            $inscritos = DB::table('registrations')->simplePaginate(10);
    
        $q = $request->input('q');

            $registration = $q? 
            Registration::where('name', 'LIKE', '%' .$q. '%')
                                            -> orWhere('email', 'LIKE', '%' .$q. '%')
                                            -> orWhere ('register_modality', 'LIKE', '%' .$q. '%')
                                            -> get() : [];
                return view ('admin-inscrito') -> withDetails($registration)->withQuery($q)->with('totalInscritos', $totalInscritos)->with('inscritos', $inscritos);
    }
    //VER TRABALHOS

    public function listarTrabalho(){   
        $totalTrabalhos = AbstractSubmission::count();
        $trabalhos = DB::table('abstract_submissions')->orderBy('abstract_title','asc')->simplePaginate(10);
        return view('admin-trabalho')->with('totalTrabalhos', $totalTrabalhos)->with('trabalhos', $trabalhos);
    }

    public function trabalhoSearch(Request $request){
        $totalTrabalhos = AbstractSubmission::count();
        $trabalhos = DB::table('abstract_submissions')->simplePaginate(10);
        
        $q = $request->input('q');
            $abstract = $q? AbstractSubmission::where('abstract_title', 'LIKE', '%' .$q. '%')
                                            -> orWhere('abstract_body', 'LIKE', '%' .$q. '%')
                                            -> orWhere ('first_keyword', 'LIKE', '%' .$q. '%')
                                            -> orWhere ('second_keyword', 'LIKE', '%' .$q. '%')
                                            -> orWhere ('third_keyword', 'LIKE', '%' .$q. '%')
                                            -> orWhere ('author', 'LIKE', '%' .$q. '%')
                                            -> get() : [];
            
                return view ('admin-trabalho') -> withDetails($abstract)->withQuery($q)->with('totalTrabalhos', $totalTrabalhos)->with('trabalhos', $trabalhos);;
    }


    public function visualizarTrabalho($trabalho_id)
    {
        $trabalho = AbstractSubmission::leftJoin('registrations','registrations.user_id','=','abstract_submissions.registration_id')
        ->leftJoin('abstract_evaluations','abstract_evaluations.submission_id','=','abstract_submissions.id')
        ->leftJoin('referee_configs','referee_configs.user_id','=','abstract_evaluations.referee_id')
        ->select('abstract_submissions.*','registrations.name AS author','registrations.register_modality','referee_configs.appraiser_name','abstract_evaluations.rate_work')
        ->where('abstract_submissions.id','=',$trabalho_id)->first();
        return view('admin-trabalho-visualizar')->with('trabalho', $trabalho)->with('trabalho_id', $trabalho_id);
    }

    public function trabalhoDelete(AbstractSubmission $id){
        $id -> delete();
       return redirect('/admin/trabalho')->withMessage("trabalho apagado!");        
    }
    



    // VER PARECERISTA
 
    public function listarParecerista()
    {
        $totalPareceristas = RefereeConfig::count();

        $parecTrabalhos = DB::table("referee_configs")
        ->select("referee_configs.*","trabalhos.quant")
        ->join(DB::raw("(SELECT 
            referee_configs.user_id, count(abstract_evaluations.id) as quant
            FROM referee_configs 
            LEFT JOIN abstract_evaluations
            ON abstract_evaluations.referee_id = referee_configs.user_id
            GROUP BY referee_configs.user_id
            ) as trabalhos"),function($join){
                $join->on("referee_configs.user_id","=","trabalhos.user_id");
        })
        ->orderBy('appraiser_name','asc')->simplePaginate(10);;

        return view('admin-parecerista', ['totalPareceristas' => $totalPareceristas, 'parecTrabalhos' => $parecTrabalhos]);
    }
    public function adminPareceristaPost()
    {
        return view('admin-parecerista');
    }
    public function pareceristaTrabalhosPendentes($parecerista_id)
    {
        $parecerista = RefereeConfig::where('user_id','=',$parecerista_id)->first();

        $eixosParecerista = AxisReferee::leftJoin('axis_configs','axis_configs.id','=','axis_referees.axis_id')
        ->where('axis_referees.referee_id','=',$parecerista_id)->get();

        $trabalhosPendentes = AbstractEvaluation::leftJoin('abstract_submissions','abstract_submissions.id','=','abstract_evaluations.submission_id')
        ->where('abstract_evaluations.referee_id','=',$parecerista_id)->where('abstract_evaluations.rate_work','=','')
        ->select('abstract_submissions.*')->simplePaginate(5);

        return view('admin-parecerista-visualizar', ['parecerista_id'=> $parecerista_id, 'parecerista' => $parecerista, 'eixosParecerista' => $eixosParecerista,'trabalhosPendentes' => $trabalhosPendentes]);
    }
    public function pareceristaTrabalhosAvaliados($parecerista_id)
    {
        $parecerista = RefereeConfig::where('user_id','=',$parecerista_id)->first();
        
        $eixosParecerista = AxisReferee::leftJoin('axis_configs','axis_configs.id','=','axis_referees.axis_id')
        ->where('axis_referees.referee_id','=',$parecerista_id)->get();

        $trabalhosAvaliados = AbstractEvaluation::leftJoin('abstract_submissions','abstract_submissions.id','=','abstract_evaluations.submission_id')
        ->where('abstract_evaluations.referee_id','=',$parecerista_id)->where('abstract_evaluations.rate_work','<>','')
        ->select('abstract_submissions.*','abstract_evaluations.rate_work')->simplePaginate(5);

        return view('admin-parecerista-visualizar-detalhe', ['parecerista_id'=> $parecerista_id, 'parecerista' => $parecerista, 'eixosParecerista' => $eixosParecerista, 'trabalhosAvaliados' => $trabalhosAvaliados]);
    }


    public function pareceristaSubstituir()
    {
        return view('admin-parecerista-substituir');
    }
}
