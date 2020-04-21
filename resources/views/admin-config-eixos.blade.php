@extends('template')
@section('content')
@include('admin-congresso-pills')

@if(session('mensagem'))
<div class="alert alert-success container">{{session('mensagem')}}</div>
@endif

<!-- início div container CONFIG CONGRESSO -->
<div class="container shadow mb-4">


    <!-- início Cabeçalho1 -->
    <div class="mb-1 pt-1">
        <h1 class="display-3">Eixos Temáticos</h1>
        <p class="lead font-italic"> Inserir eixos temáticos</p>
    </div>
    <!-- fim Cabeçalho1 -->
    {{-- início div dos eixos --}}
    <div class="">
        {{-- <label class="my-1 font-weight-bold">Eixos temáticos</label> --}}
        {{-- duv inserção de eixos --}}
        <form method="post">
            @csrf
            <div class="input-group  mb-3  d-flex justify-content-center">
                <input type="text" class="form-control col-md-8" placeholder="Insira um eixo" aria-label="Inserir eixo"
                    name="axis" aria-describedby="">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Inserir</button>
                </div>
            </div>
            <div class=" d-flex justify-content-center">
                @error('axis')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </form>

        {{-- lista de eixos inseridos --}}
        <div class="list-group-flush">
            @foreach($eixos as $eixo)
            <div class="d-flex flex-column list-group-item">
                <div class="d-flex flex-row align-items-start justify-content-between ">
                    <div class="d-flex flex-column">
                        <p class="">{{ $eixo['axis'] }}</p>
                    </div>
                    <div class="">
                        <button class="btn btn-primary ml-2"><svg class="bi bi-trash-fill" width="1em" height="1em"
                                viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M2.5 1a1 1 0 00-1 1v1a1 1 0 001 1H3v9a2 2 0 002 2h6a2 2 0 002-2V4h.5a1 1 0 001-1V2a1 1 0 00-1-1H10a1 1 0 00-1-1H7a1 1 0 00-1 1H2.5zm3 4a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7a.5.5 0 01.5-.5zM8 5a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7A.5.5 0 018 5zm3 .5a.5.5 0 00-1 0v7a.5.5 0 001 0v-7z"
                                    clip-rule="evenodd" />
                            </svg></button>
                    </div>
                </div>
            </div>
            @endforeach


            {{-- fim div lista de eixos inseridos (abaixo)--}}
        </div>

        {{-- fim div dos eixos (abaixo) --}}
    </div>


</div>
<!-- div container -->

@endsection