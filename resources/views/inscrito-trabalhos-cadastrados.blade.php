@extends('template')

@section('content')

    <div class="container">
        <ul class="nav nav-tabs my-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link " href="/inscrito">Informações</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="/inscrito/certificados">Certificados</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/inscrito/trabalho/enviar">Enviar trabalho</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/inscrito/trabalho/cadastrados">Trabalhos cadastrados</a>
            </li>
        </ul>
    </div>
    <div class="container shadow">
        <div class="mb-1 pt-1">
            <h4 class="display-3">Trabalhos cadastrados</h4>
            <p class="lead font-italic"></p>
        </div>
    

        <div class="my-3">

            @foreach ($trabalhos as $trabalho)
            <div class="my-5">
                <p> <strong>Nome do trabalho:</strong> {{ $trabalho->abstract_title}}</p>
                <p> <strong>Código do trabalho:</strong>  {{$trabalho->id}} </p>
                <p> <strong>Resumo:</strong> {{ $trabalho->abstract_body}}</p>
                <p> <strong>Eixo temático:</strong> {{ $trabalho->axis}} <br>
                <p> <strong>Nome dos participantes e Filiação institucional:</strong></p>
                <p> {{ $trabalho->author}} - {{ $trabalho->author_affiliation}}
                <p><strong>Resultado da avaliação:</strong> {{}} </p>
            </div>
            <div class="my-2">
                <button type="button" class="btn btn-outline-primary" style="width: 250px">Carta de aceite</button>
            </div>
            @endforeach
            
        </div>
        <hr>

    </div>

@endsection