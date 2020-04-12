@extends('template')

@section('content')

{{-- início da pills do ADMIN --}}
<!-- início div container -->
<div class="container">
    <!-- Início do menu das pills -->
    <nav>
        <div class="nav nav-pills" id="nav-tab" role="tablist">
          <a class="nav-item nav-link" href="/admin-home">Início</a>
    
          <a class="nav-item nav-link active font-weight-bolder" href="/admin-config-congresso">Congresso</a>
    
          <a class="nav-item nav-link" href="/admin-inscrito">Inscritos</a>
    
          <a class="nav-item nav-link" href="/admin-trabalho">Trabalhos</a>
    
          <a class="nav-item nav-link" href="/admin-parecerista">Pareceristas</a>
        </div>
      </nav>
    <!-- fim do menu das pills -->
    <!-- fim da div container -->
</div>
{{-- fim da pills do ADMIN --}}


{{-- início da tabs do ADMIN CONFIG CONGRESSO --}}

<div class="container">

    <ul class="nav nav-tabs my-3" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link " href="/admin-config-congresso">Configurar congresso</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin-config-eixos">Inserir Eixos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="/admin-config-inscrito">Configurar modalidades de inscrição</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="/admin-config-trabalho">Configurar trabalhos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="/admin-config-parecerista">Adicionar pareceristas</a>
        </li>
    </ul>
  
  </div>
  {{-- fim da tabs do ADMIN CONFIG CONGRESSO --}}

<div class="container shadow">
    <div class="mb-1 pt-1">
        <h1 class="display-3">Incluir Parecerista</h1>
        <p class="lead font-italic"></p>
    </div>
    
    <form action="" method="post">
        @csrf
        <div class="my-3">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="cpf">CPF*</label>
                    <input type="text" class="form-control" id="cpf" placeholder="CPF" name="appraiser_cpf">
                </div>
                <div class="form-group col-md-4">
                    <label for="nome">Nome*</label>
                    <input type="text" class="form-control" id="nome" placeholder="Nome" name="appraiser_name">
                </div>
                <div class="form-group col-md-4">
                    <label for="email">E-mail*</label>
                    <input type="text" class="form-control" id="email" placeholder="E-mail" name="appraiser_email">
                </div>
            </div>
        </div>
        
        <div class="my-3">
                <h5>Eixos temáticos</h5>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        Eixo 01 - Lorem ipsum dolor sit amet consectetur
                    </div>
                    <div class="form-check form-check-inline">
                        {{-- O value da opção sim tem que ser o id do eixo! --}}
                        <input class="form-check-input" type="radio" value="1" name="axis_01">
                        <label class="form-check-label">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="0" name="axis_01" checked>
                        <label class="form-check-label">Não</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        Eixo 02 - Lorem ipsum dolor sit amet consectetur
                    </div>
                    <div class="form-che ck form-check-inline">
                        <input class="form-check-input" type="radio" value="1" name="axis_02">
                        <label class="form-check-label">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="0" name="axis_02" checked>
                        <label class="form-check-label">Não</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        Eixo 03 - Lorem ipsum dolor sit amet consectetur
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="1" name="axis_03">
                        <label class="form-check-label">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="0" name="axis_03" checked>
                        <label class="form-check-label">Não</label>
                    </div>
                </div>
                ...
                <div class="form-row">
                    <div class="form-group col-md-6">
                        Eixo 20 - Lorem ipsum dolor sit amet consectetur
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="1" name="axis_20">
                        <label class="form-check-label">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="0" name="axis_20" checked>
                        <label class="form-check-label">Não</label>
                    </div>
                </div>
            </div>
            
        </form>

        <div class="my-4">
            <button type="submit" class="btn btn-primary" style="width:120px">Enviar</button>
            <a href="/admin-home" class="btn btn-primary" style="width:120px">Voltar</a>
        </div>
    </div>
    
    
    @endsection