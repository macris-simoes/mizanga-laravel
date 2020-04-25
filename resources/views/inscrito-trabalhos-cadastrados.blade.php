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
                <p> {{ $trabalho->author}} <strong> {{ $trabalho->author_affiliation}} </strong>
                <p> {{ $trabalho->first_coauthor}} <strong> {{ $trabalho->first_coauthor_afiliation}} </strong>
                <p> {{ $trabalho->second_coauthor}} <strong> {{ $trabalho->second_coauthor_afiliation}} </strong>
                <p> {{ $trabalho->third_coauthor}} <strong> {{ $trabalho->third_coauthor_afiliation}} </strong>
                <p> {{ $trabalho->fourth_coauthor}} <strong> {{ $trabalho->fourth_coauthor_afiliation}} </strong>
                <p> {{ $trabalho->fifth_coauthor}} <strong> {{ $trabalho->fifth_coauthor_afiliation}} </strong>
                <p> {{ $trabalho->sixth_coauthor}} <strong> {{ $trabalho->sixth_coauthor_afiliation}} </strong>
                <p> {{ $trabalho->eighth_coauthor}} <strong> {{ $trabalho->seventh_coauthor_afiliation}} </strong>
                <p> {{ $trabalho->eighth_coauthor}} <strong> {{ $trabalho->eighth_coauthor_afiliation}} </strong>
                <p> {{ $trabalho->nineth_coauthor}} <strong> {{ $trabalho->nineth_coauthor_afiliation}} </strong>
                <p> {{ $trabalho->tenth_coauthor}} <strong> {{ $trabalho->tenth_coauthor_afiliation}} </strong>

                <p><strong>Resultado da avaliação:</strong> 
                    @if(is_null($trabalho->rate_work))
                    <p class="font-italic">Não avaliado</p>
                    @else
                    {{$trabalho->rate_work}} 
                    @endif
                </p>
            </div>
            <div class="my-2">
                @if($trabalho->rate_work == 'Aprovado')
                <button type="button" class="btn btn-outline-primary" style="width: 250px">Carta de aceite</button>
                @elseif($trabalho->rate_work == 'Reprovado')
                <button type="button" class="btn btn-outline-primary" style="width: 250px">Carta de avaliação</button>
                @endif
            </div>
            <hr>
            @endforeach
            
        </div>
        <hr>

    </div>

@endsection