@extends('template')

@section('content')


{{-- início da pills do ADMIN --}}
<!-- início div container -->
<div class="container">
    <!-- Início do menu das tabs -->
    <nav>
        <div class="nav nav-pills" id="nav-tab" role="tablist">
            <a class="nav-item nav-link" href="/admin-home">Início</a>
            <a class="nav-item nav-link font-weight-bolder" href="/admin-config-congresso">Congresso</a>
            <a class="nav-item nav-link active" href="/admin-inscrito">Inscritos</a>
            <a class="nav-item nav-link" href="/admin-trabalho">Trabalhos</a>
            <a class="nav-item nav-link" href="/admin-parecerista">Pareceristas</a>
        </div>
    </nav>
    <!-- fim do menu das tabs -->
    <!-- fim da div container -->
</div>
{{-- fim da pills do ADMIN --}}

{{-- ---------------------------------------------------------------------------- --}}

<!-- Início lista cRud index inscrito -->
<div class="container mt-3 col-md-10 bg-light rounded shadow">
    {{-- início do campo de busca --}}
    <div class="d-flex w-100 my-3 justify-content-between">  
        <div>
            <h4 class="mt-3 font-weight-bold">Pesquisar Inscritos</h4>
        </div>
        <div class="d-flex justify-content-end">
            <div class="d-flex flex-column">
                <span class="badge badge-success badge-pill">$</span>
                <span class="badge badge-info badge-pill">T</span>
                <span class="badge badge-warning badge-pill">A</span>
            </div>
            <div class="d-flex flex-column">
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
        <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Maria Cristina Dancham Simões</h5>
                <small>há 15 dia(s)</small>
            </div>
            <div class="d-flex flex-row align-items-start">

                <small class="col-md-10">Profissional associado || macris.simoes@gmail.com</small>
                
                <div class="d-flex w-100 justify-content-end">
                    <span class="badge badge-success badge-pill">$</span>
                    <span class="badge badge-info badge-pill">T</span>
                    <span class="badge badge-warning badge-pill">A</span>
                </div>
            </div>
        </a>

        <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">List group item heading</h5>
                <small>3 days ago</small>
            </div>
            <div class="d-flex flex-row align-items-start">

                <small class="col-md-10">Donec id elit non mi porta.</small>
                
                <div class="d-flex w-100 justify-content-end">
                    <span class="badge badge-info badge-pill">T</span>
                    <span class="badge badge-warning badge-pill">A</span>
                </div>
            </div>
        </a>

        <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">List group item heading</h5>
                <small>3 days ago</small>
            </div>
            <div class="d-flex flex-row align-items-start">

                <small class="col-md-10">Donec id elit non mi porta.</small>
                
                <div class="d-flex w-100 justify-content-end">
                    <span class="badge badge-success badge-pill">$</span>
                    {{-- <span class="badge badge-warning badge-pill">A</span> --}}
                </div>
            </div>
        </a>

        <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">List group item heading</h5>
                <small>3 days ago</small>
            </div>
            <div class="d-flex flex-row align-items-start">

                <small class="col-md-10">Donec id elit non mi porta.</small>
                
                <div class="d-flex w-100 justify-content-end">
                    {{-- <span class="badge badge-success badge-pill">$</span>
                    <span class="badge badge-info badge-pill">T</span>
                    <span class="badge badge-warning badge-pill">A</span> --}}
                </div>
            </div>
        </a>

       
        
</div>
        {{-- fim dos cards de resultado da busca --}}
    <!-- fim lista de lista de eixos -->
</div>

@endsection