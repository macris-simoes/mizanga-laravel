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
                <div class="text-danger">{{ $messages }}</div>
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
                        <form action="/admin-config-eixos/{{ $eixo['id']}}" method="post">
                            @csrf
                            <input hidden value="{{ $eixo }}" >
                            <button class="btn btn-primary ml-2 " type="submit" >
                                <span class="material-icons text-white"> delete </span>
                            </button>
                        </form>
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