@extends('template')

@section('content')

{{-- início da pills do ADMIN --}}
<!-- início div container -->
<div class="container">
    <!-- Início do menu das pills -->
    <nav>
        <div class="nav nav-pills" id="nav-tab" role="tablist">
            <a class="nav-item nav-link " href="/admin-home">Início</a>

            <a class="nav-item nav-link active font-weight-bolder " href="/admin-config-congresso">Congresso</a>

            <a class="nav-item nav-link" href="/admin-inscrito">Inscritos</a>

            <a class="nav-item nav-link" href="/admin-trabalho">Trabalhos</a>

            <a class="nav-item nav-link" href="/admin-parecerista">Pareceristas</a>
        </div>
    </nav>
    <!-- fim do menu das pills -->
    <!-- fim da div container -->
</div>
{{-- fim da pills do ADMIN --}}


{{-- início da tabs do ADMIN CONFIG CONGRESSO --}}

<div class="container">

    <ul class="nav nav-tabs my-3" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active " href="/admin-config-congresso">Configurar congresso</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="/admin-config-eixos">Inserir Eixos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="/admin-config-inscrito">Configurar modalidades de inscrição</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="/admin-config-trabalho">Configurar trabalhos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin-config-parecerista">Adicionar pareceristas</a>
        </li>
    </ul>

</div>
{{-- fim da tabs do ADMIN CONFIG CONGRESSO --}}



<!-- início div container CONFIG CONGRESSO -->
<div class="container shadow">


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
        <div class="input-group  mb-3  d-flex justify-content-center">
            <input type="text" class="form-control col-md-8" placeholder="Insira um eixo" aria-label="Buscar nome"
                name="axis-config" aria-describedby="button-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button" id="button-addon2">Buscar</button>
            </div>
        </div>

        {{-- lista de eixos inseridos --}}
        <div class="list-group-flush">

            <div class="d-flex flex-column list-group-item">
                <div class="d-flex flex-row align-items-start ">
                    <div class="d-flex flex-column">
                        <p class="">Some quick example text to build on the card title and make up the bulk of
                            the card's content. Some quick example text to build on the card title and make up
                            the bulk of the card's content.</p>
                    </div>
                    <button class="btn btn-primary ml-2"><svg class="bi bi-trash-fill" width="1em" height="1em"
                            viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M2.5 1a1 1 0 00-1 1v1a1 1 0 001 1H3v9a2 2 0 002 2h6a2 2 0 002-2V4h.5a1 1 0 001-1V2a1 1 0 00-1-1H10a1 1 0 00-1-1H7a1 1 0 00-1 1H2.5zm3 4a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7a.5.5 0 01.5-.5zM8 5a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7A.5.5 0 018 5zm3 .5a.5.5 0 00-1 0v7a.5.5 0 001 0v-7z"
                                clip-rule="evenodd" />
                        </svg></button>
                </div>
            </div>

            <div class="d-flex flex-column list-group-item ">
                <div class="d-flex flex-row align-items-start ">

                    <div class="d-flex flex-column">
                        <p class="">Some quick example text to build on the card title and make up the bulk of
                            the card's content. Some quick example text to build on the card title and make up
                            the bulk of the card's content.</p>
                    </div>

                    <button class="btn btn-primary ml-2"><svg class="bi bi-trash-fill" width="1em" height="1em"
                            viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M2.5 1a1 1 0 00-1 1v1a1 1 0 001 1H3v9a2 2 0 002 2h6a2 2 0 002-2V4h.5a1 1 0 001-1V2a1 1 0 00-1-1H10a1 1 0 00-1-1H7a1 1 0 00-1 1H2.5zm3 4a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7a.5.5 0 01.5-.5zM8 5a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7A.5.5 0 018 5zm3 .5a.5.5 0 00-1 0v7a.5.5 0 001 0v-7z"
                                clip-rule="evenodd" />
                        </svg></button>
                </div>

            </div>

            <div class="d-flex flex-column list-group-item ">
                <div class="d-flex flex-row align-items-start ">

                    <div class="d-flex flex-column">
                        <p class="">Some quick example text to build on the card title and make up the bulk of
                            the card's content. Some quick example text to build on the card title and make up
                            the bulk of the card's content.</p>
                    </div>

                    <button class="btn btn-primary ml-2"><svg class="bi bi-trash-fill" width="1em" height="1em"
                            viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M2.5 1a1 1 0 00-1 1v1a1 1 0 001 1H3v9a2 2 0 002 2h6a2 2 0 002-2V4h.5a1 1 0 001-1V2a1 1 0 00-1-1H10a1 1 0 00-1-1H7a1 1 0 00-1 1H2.5zm3 4a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7a.5.5 0 01.5-.5zM8 5a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7A.5.5 0 018 5zm3 .5a.5.5 0 00-1 0v7a.5.5 0 001 0v-7z"
                                clip-rule="evenodd" />
                        </svg></button>
                </div>
            </div>

            {{-- fim div lista de eixos inseridos (abaixo)--}}
        </div>

        {{-- fim div dos eixos (abaixo) --}}
    </div>


</div>
<!-- div container -->

@endsection