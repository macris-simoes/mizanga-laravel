@extends('template')

@section('content')

    <div class="container">
        <ul class="nav nav-tabs my-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link " href="/inscrito-home">Informações</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active " href="/inscrito-certificados">Certificados</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/inscrito-enviar-trabalho">Enviar trabalho</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="/inscrito-trabalhos-cadastrados">Trabalhos cadastrados</a>
            </li>
        </ul>
    </div>
        <div class="container shadow">
            <div class="mb-1 pt-1">
                <h4 class="display-3">Certificados</h4>
                <p class="lead font-italic"></p>
            </div>
    
            <div class="my-3">
                <ul>
                    <li>Certificado de apresentação de pôster <a href="#">(Clique aqui para imprimir)</a></li>
                    <ul style="list-style-type:none">
                        <li> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    </ul>
                    <li>Certitificado de participação <a href="#">(Clique aqui para imprimir)</a></li>
                    <ul style="list-style-type:none">
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    </ul>
                </ul>
            </div>
    
        </div>
@endsection