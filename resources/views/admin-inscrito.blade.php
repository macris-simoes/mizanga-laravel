@extends('template')
@section('content')
@include('admin-congresso-pills')

{{-- ---------------------------------------------------------------------------- --}}

<!-- Início lista cRud index inscrito -->
<div class="container mt-3 col-md-10 shadow">

    {{-- início do campo de busca --}}
    <div class="d-flex w-100 my-3 justify-content-between">  
        <div>
            <h1 class="display-4">Pesquisar Inscritos</h1>
        <p>Inscrições até o momento: {{$totalInscritos}}</p>
            <small>Clique sobre o nome do inscrito para acessar as informações</small>
        </div>
        
        <div class="d-flex justify-content-end">
            <div class="d-flex flex-column">
                <span class="badge badge-success badge-pill">$</span>
                <span class="badge badge-info badge-pill">T</span>
                <span class="badge badge-warning badge-pill">A</span>
            </div>
            <div class="d-flex flex-column ml-1">
                <small>Pagamento realizado</small>
                <small>Submissão de trabalho</small>
                <small>Trabalho aprovado</small>
            </div>
        </div>
    </div>

    <div class="input-group  mb-3">
        <input type="text" class="form-control" placeholder="Insira um nome" aria-label="Buscar nome" aria-describedby="button-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button" id="button-addon2">Buscar</button>
        </div>
    </div>
    {{-- fim do campo de busca --}}


    {{-- início dos cards de resultado da busca --}}
    <div class="list-group my-3">
        @foreach($inscritos as $inscrito)
        <a href="/admin-inscrito-showa/{{$inscrito->id}}" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{$inscrito->name}}</h5>
            </div>
            <div class="d-flex flex-row align-items-start">

                <small class="col-md-10">{{$inscrito->register_modality}} || {{$inscrito->email}}</small>

                {{-- <div class="d-flex w-100 justify-content-end">
                    <span class="badge badge-success badge-pill">$</span>
                    <span class="badge badge-info badge-pill">T</span>
                    <span class="badge badge-warning badge-pill">A</span>
                </div> --}}
            </div>
        </a>
        @endforeach       
        {{ $inscritos->links()}}
        
    </div>
        {{-- fim dos cards de resultado da busca --}}
    <!-- fim lista de lista de eixos -->
</div>

@endsection