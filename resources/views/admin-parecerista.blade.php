@extends('template')
@section('content')
@include('admin-congresso-pills')

{{-- ---------------------------------------------------------------------------- --}}

<!-- Início lista cRud index ADMIN PARECERISTA -->
<div class="container mt-3 col-md-10 shadow">

    {{-- início do campo de busca --}}
    <div class="d-flex w-100 my-3 justify-content-between">  
        <div>
            <h1 class="display-4">Pareceristas</h1>
            <p>Pareceristas cadastrados: 1234</p>
            <small>Clique sobre o nome do parecerista para acessar as informações</small>
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
        <a href="/admin-parecerista-showa" class="list-group-item list-group-item-action">
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-column align-items-start">
                    <h5 class="mb-1">Maria Cristina Dancham Simões</h5>
                    <small>Parecerista || macris.simoes@gmail.com</small>
                    <small>Trabalhos designados: 1234</small>
                </div>
                
                <div class="d-flex flex-column justify-content-between align-items-end">                    
                    <small>há 15 dia(s)</small>
                    <button type="submit" class="btn btn-outline-primary"> Remover parecerista </button>
                </div>
            </div>
        </a>
        <a href="/admin-parecerista-showa" class="list-group-item list-group-item-action">
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-column align-items-start">
                    <h5 class="mb-1">Maria Cristina Dancham Simões</h5>
                    <small>Parecerista || macris.simoes@gmail.com</small>
                    <small>Trabalhos designados: 1234</small>
                </div>
                
                <div class="d-flex flex-column justify-content-between align-items-end">                    
                    <small>há 15 dia(s)</small>
                    <button type="submit" class="btn btn-outline-primary"> Remover parecerista </button>
                </div>
            </div>
        </a>
        <a href="/admin-parecerista-showa" class="list-group-item list-group-item-action">
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-column align-items-start">
                    <h5 class="mb-1">Maria Cristina Dancham Simões</h5>
                    <small>Parecerista || macris.simoes@gmail.com</small>
                    <small>Trabalhos designados: 1234</small>
                </div>
                
                <div class="d-flex flex-column justify-content-between align-items-end">                    
                    <small>há 15 dia(s)</small>
                    <button type="submit" class="btn btn-outline-primary"> Remover parecerista </button>
                </div>
            </div>
        </a>
        <a href="/admin-parecerista-showa" class="list-group-item list-group-item-action">
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-column align-items-start">
                    <h5 class="mb-1">Maria Cristina Dancham Simões</h5>
                    <small>Parecerista || macris.simoes@gmail.com</small>
                    <small>Trabalhos designados: 1234</small>
                </div>
                
                <div class="d-flex flex-column justify-content-between align-items-end">                    
                    <small>há 15 dia(s)</small>
                    <button type="submit" class="btn btn-outline-primary"> Remover parecerista </button>
                </div>
            </div>
        </a>
        <a href="/admin-parecerista-showa" class="list-group-item list-group-item-action">
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-column align-items-start">
                    <h5 class="mb-1">Maria Cristina Dancham Simões</h5>
                    <small>Parecerista || macris.simoes@gmail.com</small>
                    <small>Trabalhos designados: 1234</small>
                </div>
                
                <div class="d-flex flex-column justify-content-between align-items-end">                    
                    <small>há 15 dia(s)</small>
                    <button type="submit" class="btn btn-outline-primary"> Remover parecerista </button>
                </div>
            </div>
        </a>
        <a href="/admin-parecerista-showa" class="list-group-item list-group-item-action">
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-column align-items-start">
                    <h5 class="mb-1">Maria Cristina Dancham Simões</h5>
                    <small>Parecerista || macris.simoes@gmail.com</small>
                    <small>Trabalhos designados: 1234</small>
                </div>
                
                <div class="d-flex flex-column justify-content-between align-items-end">                    
                    <small>há 15 dia(s)</small>
                    <button type="submit" class="btn btn-outline-primary"> Remover parecerista </button>
                </div>
            </div>
        </a>

      
</div>
        {{-- fim dos cards de resultado da busca --}}
    <!-- fim lista de lista de eixos -->
</div>

@endsection