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
    <table class="table table-hover">
        <tbody>
            <tr>
                <td class="">Marxismo e psicologia: aportes para uma reflexão materialista sobre o indivíduo
                </td>
                <td class=""><a href="parecerista/trabalho/avaliar">Avaliar</a></td>
            </tr>
            <tr>
                <td class="">Quando a ciência é ídolo: um comentário crítico sobre a psicologia moral
                    nietzschiana de Leiter</td>
                <td class=""><a href="parecerista/trabalho/avaliar">Avaliar</a></td>
            </tr>
            <tr class="border-bottom">
                <td>Conhecimentos especializados sobre os problemas de rendimento escolar: um estudo
                    de manuais de psicologia e da Revista de Educação</td>
                <td class=""><a href="parecerista/trabalho/avaliar">Avaliar</a></td>
            </tr>
        </tbody>
    </table>
    

    <h5 class="mt-4"> Trabalhos aprovados </h5>
    <table class="table table-hover">
        <tbody>
            <tr>
                <td class="">Marxismo e psicologia: aportes para uma reflexão materialista sobre o indivíduo
                </td>
                <td class=""><a href="parecerista-avaliar-trabalho/12350">Parecer</a></td>
            </tr>
            <tr>
                <td class="">Quando a ciência é ídolo: um comentário crítico sobre a psicologia moral
                    nietzschiana de Leiter</td>
                <td class=""><a href="parecerista-avaliar-trabalho/12320">Parecer</a></td>
            </tr>
            <tr class="border-bottom">
                <td class="">Conhecimentos especializados sobre os problemas de rendimento escolar: um estudo
                    de manuais de psicologia e da Revista de Educação</td>
                <td class=""><a href="parecerista-avaliar-trabalho/12305">Parecer</a></td>
            </tr>
        </tbody>
    </table>

    <h5 class="mt-5"> Trabalhos reprovados </h5>
    <p class="font-italic my-3">Não há trabalhos nesta lista.</p>
    <hr class="mt-2">
</div>

@endsection