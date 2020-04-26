@extends('template')
@section('content')
@include('includes/admin-congresso-pills')

{{-- --------------------------------------------------------------------------------------------- --}}

<!-- Início lista cRud index trabalho -->
<div class="container mt-3 col-md-10 shadow">

    {{-- início do campo de busca --}}
    <div class="row my-3">  
        <div class="col-lg-9 my-1">
            <h1 class="display-4">Pesquisar Trabalhos</h1>
            <p>Trabalhos até o momento: {{$totalTrabalhos}}</p>
            <small>Clique sobre o nome do trabalho para acessar as informações</small>
        </div>
        
        <div class="col-lg-3 my-1">
            <div>
                <span class="badge badge-warning badge-pill">A</span>
                <small>Trabalho aprovado</small>
            </div>
            <div>
                <span class="badge badge-light badge-pill">...</span>
                <small>Enviado para parecer</small>
            </div>
            <div>
                <span class="badge badge-dark badge-pill">X</span>
                <small>Trabalho recusado</small>
            </div>      
        </div>
    </div>

    <form action="/admin-trabalho" method="POST">
        @csrf
        <div class="input-group  mb-3">
            <input type="text" class="form-control" placeholder="Insira uma palavra ou trecho" aria-label="Buscar nome"
                aria-describedby="button-addon2" name="q">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button" id="button-addon2">Buscar</button>
            </div>
        </div>
    </form>

    @if (isset($details))
    @include('admin-trabalho-search')
    @endif

    <hr>

    {{-- fim do campo de busca --}}


    {{-- início dos cards de resultado da busca --}}
    @if(isset($trabalhos))
    <div class="list-group my-3">
        

        @foreach($trabalhos as $trabalho)
        <a href="/admin-trabalho-visualizar/{{$trabalho->id}}" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{$trabalho->abstract_title}}</h5>
                <small>há 15 dia(s)</small>
            </div>
            <div class="d-flex flex-row align-items-start">

                <small class="col-md-10">{{$trabalho->category}} || {{$trabalho->author}}</small>
                
                <div class="d-flex w-100 justify-content-end">
                    <span class="badge badge-warning badge-pill">A</span>
                    {{-- <span class="badge badge-light badge-pill">...</span>
                    <span class="badge badge-dark badge-pill">X</span> --}}
                </div>
            </div>
        </a>
        @endforeach
        
    </div>
    @else
    <p class="font-italic">Não há trabalhos submetidos</p>
    @endif
        {{-- fim dos cards de resultado da busca --}}
    <!-- fim lista de lista de eixos -->
</div>

    
@endsection