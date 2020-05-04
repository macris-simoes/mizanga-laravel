@extends('template')
@section('content')
{{-- @include('includes/admin-congresso-pills') --}}



{{-- ---------------------------div container fundo colorido------------------------------------- --}}
<div class="container mt-3 col-md-10 shadow bg-light">
    <div class="card m-3 border-0">
        <div class="card-body">

            <div class="container d-flex flex-row justify-content-between">
                <div>
                    <h5 class="card-title">{{$inscrito->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$inscrito->register_modality}}</h6>
                </div>
                    <a href="/admin/inscrito"> <span class="material-icons"> close </span> </a>
            </div>
            <div>
                <ul class="nav nav-tabs my-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin/inscrito/visualizar/{{$user_id}}">Detalhes da inscrição</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/admin/inscrito/visualizar-trabalho/{{$user_id}}">Trabalhos inscritos</a>
                    </li>
                </ul>
            </div>

            <div class="card-text list-group-item border-0">
                <div class="my-3">
                    <h5 class="font-weight-bold">Dados pessoais</h5>
                    <div class="row">
                        <p class="col-lg-4"> <span class="font-weight-bold">CPF: </span>{{$inscrito->cpf}}</p>
                        <p class="col-lg-4"> <span class="font-weight-bold">RG: </span>{{$inscrito->rg}}</p>
                        <p class="col-lg-4"> <span class="font-weight-bold">Órgão Emissor: </span>{{$inscrito->emissor}}</p>
                    </div>

                    <div class="row">
                        <p class="col-lg-6"> <span class="font-weight-bold">Nome: </span>{{$inscrito->name}}</p>
                        <p class="col-lg-6"> <span class="font-weight-bold">Data de nascimento: </span>{{$inscrito->birth_date}}</p>
                    </div>
                    <div class="row">
                        <p class="col-lg-6"> <span class="font-weight-bold">Nome Social: </span>{{$inscrito->social_name}}</p>
                        <p class="col-lg-6"> <span class="font-weight-bold">Instituição para crachá: </span>{{$inscrito->institution}}</p>
                    </div>
                </div>
                
                <div class="my-3">
                    <h5 class="font-weight-bold">Formação</h5>
                    <div class="row">
                        <p class="col-lg-6"> <span class="font-weight-bold">Titulação mais alta: </span>{{$inscrito->education_level}}</p>
                        <p class="col-lg-6"> <span class="font-weight-bold">Instituição de titulação: </span>{{$inscrito->grad_school}}</p>
                    </div>
                </div>

                <div class="my-3">
                    <h5 class="font-weight-bold">Atuação Profissional</h5>
                    <div class="row">
                        <p class="col-lg-4"> <span class="font-weight-bold">Situação profissional: </span>{{$inscrito->profession}}</p>
                        <p class="col-lg-4"> <span class="font-weight-bold">Filiação institucional: </span>{{$inscrito->filiation}}</p>
                        <p class="col-lg-4"> <span class="font-weight-bold">Função institucional/Cargo: </span>{{$inscrito->job_title}}</p>
                    </div>
                    <div class="row">
                        <p class="col-lg-12"> <span class="font-weight-bold">Áreas de atuação: </span>{{$inscrito->expertise}}</p>
                    </div>
                </div>
                {{-- Endereço --}}
                <div class="my-3">
                    <h5 class="font-weight-bold">Endereço</h5>                    
                    <div class="row">
                        <p class="col-lg-12"> <span class="font-weight-bold">País de residência: </span>{{$inscrito->location}}</p>
                    </div>

                    <div class="row">
                        <p class="col-lg-6"> <span class="font-weight-bold">Município: </span>{{$inscrito->city}}</p>
                        <p class="col-lg-6"> <span class="font-weight-bold">UF: </span>{{$inscrito->uf}}</p>
                    </div>

                    <div class="row">
                        <p class="col-12"> <span class="font-weight-bold">País: </span>{{$inscrito->country}}</p>
                    </div>
                </div>
                {{-- Dados de contato --}}
                <div class="my-3">
                    <h5 class="font-weight-bold">Dados de contato</h5>
                    <div class="row">
                        <p class="col-lg-4"> <span class="font-weight-bold">Telefone residencial: </span>{{$inscrito->home_phone}}</p>
                        <p class="col-lg-4"> <span class="font-weight-bold">Telefone profissional: </span>{{$inscrito->work_phone}}</p>
                        <p class="col-lg-4"> <span class="font-weight-bold">Telefone celular: </span>{{$inscrito->mobile_phone}}</p>
                    </div>

                    <div class="row">
                        <p class="col-12"> <span class="font-weight-bold">E-mail: </span>{{$inscrito->email}}</p>
                    </div>
                </div>
                {{-- acessibilidade --}}
                <div class="my-3">
                    <h5 class="font-weight-bold">Acessibilidade</h5>
                    <div class="row">
                        <p class="col-lg-6"> 
                            <span class="font-weight-bold">Necessita de recursos de acessibilidade? </span>
                            @if($inscrito->accessibility==0)
                                Sim
                            @else
                                Não
                            @endif
                        </p>
                    </div>

                    <div class="row">
                        <p class="col-12"> <span class="font-weight-bold">Recursos de acessibilidade necessários: </span>{{$inscrito->accessibility_info}}</p>
                    </div>
                </div>
                {{-- dados complementares --}}
                <div class="my-3">
                    <h5 class="font-weight-bold">Dados complementares</h5>
                    <div class="form-row">
                        <p class="col-lg-3"> <span class="font-weight-bold">Gênero: </span>{{$inscrito->gender}}</p>
                        <p class="col-lg-3"> <span class="font-weight-bold">Raça/Cor: </span>{{$inscrito->color}}</p>
                        <p class="col-lg-6"> 
                            <span class="font-weight-bold">Nome social na emissão do certificado: </span>
                            @if($inscrito->use_social_name==0)
                                Sim
                            @else
                                Não
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            {{-- FIM DIV DETALHES DA INSCRIÇÃO --}}

        </div>
    </div>

</div>
{{-- ---------------------------div container fundo colorido------------------------------------- --}}

@endsection