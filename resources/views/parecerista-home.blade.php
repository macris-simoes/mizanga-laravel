@extends('template')

@section('content')


<body>

    <div class="container">
        <div class="mb-1 pt-1">
            <h4 class="display-3">Área do parecerista</h4>
            <p class="lead font-italic"> </p>
        </div>
        <a href="/instrucao-avaliadores" target="_blank" class="d-block">Instruções aos avaliadores</a>
        <!-- add JS para abrir nova pagina pop-up -->
        <a href="#" class="d-block">Exportar resultados para Excel</a>
        <hr class="my-3">

        <h5> Trabalhos pendentes </h5>
        <!-- add PHP para popular campos de trabalhos -->
        <table class="table table-striped table-bordered">            
            <tbody>
                <tr>
                    <td class="col-10">Psicologia da saúde e psicologia positiva: perspectivas e desafios</td>
                    <td class="col-2 align-middle"><a href="parecerista-avaliar-trabalho/12301">Avaliar trabalho</a></td>
                </tr>
                <tr>
                    <td class="col-10">Psicologia da Literatura e Psicologia na Literatura</td>
                    <td class="col-2 align-middle"><a href="parecerista-avaliar-trabalho/12356">Avaliar trabalho</a></td>
                </tr>
            </tbody>
        </table>
        
        <hr class="my-3">

        <h5> Trabalhos aprovados </h5>
        <table class="table table-striped table-bordered">            
            <tbody>
                <tr>
                    <td class="col-10">Marxismo e psicologia: aportes para uma reflexão materialista sobre o indivíduo</td>
                    <td class="col-2 align-middle"><a href="parecerista-avaliar-trabalho/12350">Ver avaliação</a></td>
                </tr>
                <tr>
                    <td  class="col-10">Quando a ciência é ídolo: um comentário crítico sobre a psicologia moral nietzschiana de Leiter</td>
                    <td class="col-2 align-middle"><a href="parecerista-avaliar-trabalho/12320">Ver avaliação</a></td>
                </tr>
                <tr>
                    <td  class="col-10">Conhecimentos especializados sobre os problemas de rendimento escolar: um estudo de manuais de psicologia e da Revista de Educação</td>
                    <td class="col-2 align-middle"><a href="parecerista-avaliar-trabalho/12305">Ver avaliação</a></td>
                </tr>
            </tbody>
        </table>

        <hr class="my-3">
        
        <h5> Trabalhos reprovados </h5>
        <p class="font-italic my-3">Não há trabalhos nesta lista.</p>
        <hr class="my-3">
    </div>

@endsection
