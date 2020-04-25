@extends('template')

@section('content')

<div class="container shadow mt-4">
    <div class="my-3 ">
        <h4 class="display-3">Área do parecerista</h4>
        <a href="/instrucao-avaliadores" target="_blank" class="d-block">Instruções aos avaliadores</a>
        
        <hr class="mb-4">
    </div>
    <h5 class="mt-4"> Trabalhos pendentes </h5>
    <!-- add PHP para popular campos de trabalhos -->
    @if(isset($trabalhosPendentes))
        <table class="table table-hover">
            <tbody>
                @foreach($trabalhosPendentes as $trabalhoPendente)
                <tr>
                    <td class="">{{$trabalhoPendente->abstract_title}}</td>
                    <td class=""><a href="parecerista/trabalho/avaliar/{{$trabalhoPendente->submission_id}}">Avaliar</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p class="font-italic">Não há trabalhos pendentes.</p>
        @endif

    

    <h5 class="mt-4"> Trabalhos aprovados </h5>
    <table class="table table-hover">
        @if(!empty($trabalhosAprovados->toArray()))
        <tbody>
            @foreach($trabalhosAprovados as $trabalhoAprovado)
            <tr>
                <td class="">{{$trabalhoAprovado->abstract_title}}</td>
                <td class=""><a href="parecerista/trabalho/avaliar/{{$trabalhoAprovado->submission_id}}">Parecer</a></td>
            </tr>
            @endforeach
        </tbody>
        @else
        <p class="font-italic">Não há trabalhos aprovados.</p>
        @endif
    </table>

    <h5 class="mt-5"> Trabalhos reprovados </h5>
    <table class="table table-hover">
        @if(!empty($trabalhosReprovados->toArray()))
        <tbody>
            @foreach($trabalhosReprovados as $trabalhoReprovado)
            <tr>
                <td class="">{{$trabalhoReprovado->abstract_title}}</td>
                <td class=""><a href="parecerista/trabalho/avaliar/{{$trabalhoReprovado->submission_id}}">Ver avaliação</a></td>
            </tr>
            @endforeach
        </tbody>
        @else
        <p class="font-italic">Não há trabalhos reprovados.</p>
        @endif
    </table>
    <hr class="mt-2">
</div>

@endsection