@extends('template')

@section('content')


{{-- início da pills do ADMIN --}}
<!-- início div container -->
<div class="container">
    <!-- Início do menu das pills -->
    <nav>
        <div class="nav nav-pills" id="nav-tab" role="tablist">
            <a class="nav-item nav-link" href="/admin-home">Início</a>

            <a class="nav-item nav-link font-weight-bolder" href="/admin-config-congresso">Congresso</a>

            <a class="nav-item nav-link " href="/admin-inscrito">Inscritos</a>

            <a class="nav-item nav-link " href="/admin-trabalho">Trabalhos</a>

            <a class="nav-item nav-link active" href="/admin-parecerista">Pareceristas</a>
        </div> 
    </nav>
    <!-- fim do menu das pills -->
    <!-- fim da div container -->
</div>
{{-- fim da pills do ADMIN --}}

{{-- ---------------------------------------------------------------------------- --}}

<div class="container mt-3 col-md-10 shadow">
    <div class="card m-3 border-0">
        <div class="card-body">
            <a href="/admin-inscrito">  Voltar </a>
            <h5 class="card-title">Maria Cristina Dancham Simões</h5>
            <h6 class="card-subtitle mb-2 text-muted">Eixos definidos para este parecerista</h6>
            <div>
                <small>Eixo 1: Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia ea amet nostrum. Autem saepe doloremque error nisi</small>
                <br>
                <small>Eixo 1: Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia ea amet nostrum. Autem saepe doloremque error nisi</small>
            </div>
                

            {{-- início da tabs do ADMIN READ parecerista --}}

            <div>
                <ul class="nav nav-tabs my-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link " href="/admin-parecerista-showa">Trabalhos para avaliar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin-parecerista-showb">Trabalhos já avaliados</a>
                    </li>
                </ul>
            </div>
            {{-- fim da tabs do ADMIN READ parecerista --}}

{{-- ------------------------------------------------------------------------------ --}}

            {{-- div lista de trabalhos --}}
            <div class="list-group-flush">

                <div class="list-group-item d-flex justify-content-between">
                    <h6 class="font-weight-bold">Trabalhos designados</h6>
                    <h6 class="col-md-2 text-center font-weight-bold">Pareceres entregues</h6>
                </div>

                <div class="d-flex flex-column list-group-item">

                    <div class="d-flex flex-row align-items-between">

                        <div class="d-flex flex-column col-md-10">
                            <p class="">Some quick example text to build on the card title and make up the bulk of
                                the card's content. </p>

                            <small>Autor: John Doe</small>
                            <small>Parecer: aprovado </small>
                        </div>
                        <div class="d-flex col-md-2 justify-content-center ">
                            <div class="btn-group-vertical" role="group">
                                <button type="submit" class="btn btn-outline-primary"> ver </button>
                                <button type="submit" class="btn btn-outline-primary"> apagar </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-column list-group-item">

                    <div class="d-flex flex-row align-items-between ">

                        <div class="d-flex flex-column col-md-10">
                            <p class="">Some quick example text to build on the card title and make up the bulk of
                                the card's content. </p>

                            <small>Autor: John Doe</small>
                            <small>Parecer: aprovado </small>
                        </div>
                        <div class="d-flex col-md-2 justify-content-center ">
                            <div class="btn-group-vertical" role="group">
                                <button type="submit" class="btn btn-outline-primary"> ver </button>
                                <button type="submit" class="btn btn-outline-primary"> apagar </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-column list-group-item">

                    <div class="d-flex flex-row align-items-between ">

                        <div class="d-flex flex-column col-md-10">
                            <p class="">Some quick example text to build on the card title and make up the bulk of
                                the card's content. </p>

                            <small>Autor: John Doe</small>
                            <small>Parecer: reprovado </small>
                        </div>
                        <div class="d-flex col-md-2 justify-content-center ">
                            <div class="btn-group-vertical" role="group">
                                <button type="submit" class="btn btn-outline-primary"> ver </button>
                                <button type="submit" class="btn btn-outline-primary"> apagar </button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- fim div lista de trabalhos (abaixo)--}}
            </div>
            <a href="/admin-inscrito" class="mt-5">  Voltar </a>
            {{-- fim card-body (abaixo) --}}
        </div>
        {{-- fim da div card (abaixo) --}}
    </div>

{{-- fim div container do background( abaixo) --}}
</div>

@endsection