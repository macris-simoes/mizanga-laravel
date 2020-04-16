@extends('template')
@section('content')
@include('admin-congresso-pills')

@if(session('mensagem'))
    <div class="alert alert-success container">{{session('mensagem')}}</div>
@endif

<div class="container shadow mb-4">
    <div class="mb-1 pt-1">
        <h1 class="display-3">Incluir Parecerista</h1>
        <p class="lead font-italic"></p>
    </div>
    
    <form method="post" id="cadastro-parecerista">
        @csrf
        <div class="my-3">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="cpf">CPF*</label>
                    <input type="text" class="form-control cpf" id="cpf" placeholder="CPF" name="appraiser_cpf">
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
                @foreach($eixos as $eixo)

                <div class="form-row">
                    <div class="form-group col-md-6">
                        Eixo {{$eixo['id']}} - {{ $eixo['axis'] }}
                    </div>
                    <div class="form-check form-check-inline">
                        {{-- O value da opção sim tem que ser o id do eixo! --}}
                    <input class="form-check-input" type="radio" value="{{ $eixo['id'] }}" name="axis_{{$eixo['id']}}">
                        <label class="form-check-label">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="0" name="axis_{{$eixo['id']}}" checked>
                        <label class="form-check-label">Não</label>
                    </div>
                </div>
                @endforeach
                
            </div>
            
            <div class="my-4">
                <button type="submit" class="btn btn-primary" style="width:120px">Enviar</button>
                <a href="/admin-home" class="btn btn-primary" style="width:120px">Voltar</a>
            </div>
        </form>

    </div>
    
    
    @endsection