@extends('template')

@section('content')
{{-- @include('includes/admin-congresso-pills') --}}


{{-- ---------------------------div container fundo colorido------------------------------------- --}}
<div class="container my-3 col-md-10 shadow bg-light">
    <div class="card m-3 border-0">

        <div class="card-body">

            <div class="container d-flex flex-row justify-content-between">
                <div>
                    <h5 class="card-title">{{$trabalho->author}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$trabalho->register_modality}}</h6>
                </div>
                <a href="/admin-trabalho" class="">  <span class="material-icons"> close </span> </a>
                
            </div>

            {{-- início da tabs do ADMIN READ Trabalhos --}}

            <div>
                <ul class="nav nav-tabs my-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin-trabalho-visualizar/{{$trabalho_id}}">Detalhes do Trabalho</a>
                    </li>
                </ul>
            </div>
            {{-- fim da tabs do ADMIN READ Trabalho --}}

            {{-- INÍCIO DIV Detalhes do Trabalho --}}
            <div class="card-text list-group-item border-0">
                
           {{-- div lista de trabalhos --}}
           <div class="list-group-flush">
            <h6 class="font-weight-bold list-group-item">{{$trabalho->abstract_title}}</h6>

            <div class="d-flex flex-column list-group-item">
                <div class="d-flex flex-row align-items-start ">
                    <div class="d-flex flex-column">
                        <p class="text-justify">{{$trabalho->abstract_body}}</p>

                        <small>Parecerista: 
                            @if(($trabalho->appraiser_name)=='')
                            Ainda não foi atribuído
                            @else
                            {{$trabalho->appraiser_name}}
                            @endif
                        </small>

                        <small>Parecer: 
                            @if(($trabalho->rate_work)=='')
                            Ainda não foi avaliado
                            @else
                            {{$trabalho->rate_work}}
                            @endif
                        </small>
                    </div>
                </div>
            </div>


            {{-- fim div lista de trabalhos (abaixo)--}}
        </div>
                
                    {{-- buttons --}}
                    <div class="my-4 d-flex flex-row justify-content-between">
                        <a href="/admin-trabalho">  Voltar </a>
                        <input type="submit" class="btn btn-warning" value="Apagar trabalho">
                    </div>
                

            </div>
            {{-- FIM DIV Detalhes do Trabalho --}}

        </div>
    </div>

</div>
{{-- ---------------------------div container fundo colorido------------------------------------- --}}

@endsection