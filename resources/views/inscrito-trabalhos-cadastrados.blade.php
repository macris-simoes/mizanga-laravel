@extends('template')

@section('content')

    <div class="container">
        <ul class="nav nav-tabs my-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link " href="/inscrito-home">Informações</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="/inscrito-certificados">Certificados</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/inscrito-enviar-trabalho">Enviar trabalho</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/inscrito-trabalhos-cadastrados">Trabalhos cadastrados</a>
            </li>
        </ul>
    </div>
    <div class="container shadow">
        <div class="mb-1 pt-1">
            <h4 class="display-3">Trabalhos cadastrados</h4>
            <p class="lead font-italic"></p>
        </div>
    

        <div class="my-3">
            <p> 
                <strong>Nome do trabalho</strong> <br>
                <strong>Código do trabalho:</strong>  XXXXXX <br>
                <strong>Resumo:</strong> <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed faucibus montes, posuere dis elit arcu. Enim viverra ornare integer rhoncus facilisis ipsum. Ornare malesuada et neque, eu a, mauris vulputate dolor, sagittis. Aliquam, elit id vitae placerat eget erat elit tortor eu. Libero, massa vitae, senectus ullamcorper. Cursus sit in viverra convallis volutpat. Nunc velit vitae sociis amet rhoncus, egestas ut a sed.
                Palavras-chave: Lorem ipsum, dolor sit amet, consectetur. <br>
                <strong>Eixo temático:</strong> Eixo 01 - Lorem ipsum dolor sit amet, consectetur <br>
                <strong>Nome dos participantes e Filiação institucional:</strong><br>
                Lorem Ipsum Dolor - USP <br>
                Sit Amet Consectetur - Unicamp <br>
                Viverra Convalis - USP <br><br>
                <strong>Resultado da avaliação:</strong> Aprovado
            </p>
            <div class="my-2">
                <button type="button" class="btn btn-outline-primary" style="width: 250px">Carta de aceite</button>
            </div>
        </div>
        <hr>

    </div>

@endsection