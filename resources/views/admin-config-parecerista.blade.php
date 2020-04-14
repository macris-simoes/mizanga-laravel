@extends('template')
@section('content')
@include('admin-congresso-pills')

<div class="container shadow">
    <div class="mb-1 pt-1">
        <h1 class="display-3">Incluir Parecerista</h1>
        <p class="lead font-italic"></p>
    </div>
    
    <form method="post">
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
                        <input class="form-check-input" type="radio" value="2" name="axis_02">
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
                        <input class="form-check-input" type="radio" value="3" name="axis_03">
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
                        <input class="form-check-input" type="radio" value="20" name="axis_20">
                        <label class="form-check-label">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="0" name="axis_20" checked>
                        <label class="form-check-label">Não</label>
                    </div>
                </div>
            </div>
            
            <div class="my-4">
                <button type="submit" class="btn btn-primary" style="width:120px">Enviar</button>
                <a href="/admin-home" class="btn btn-primary" style="width:120px">Voltar</a>
            </div>
        </form>

    </div>
    
    
    @endsection