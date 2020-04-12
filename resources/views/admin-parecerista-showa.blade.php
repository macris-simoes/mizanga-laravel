@extends('template')
@section('content')
@include('admin-congresso-pills')

{{-- ---------------------------------------------------------------------------- --}}

<div class="container mt-3 col-md-10 shadow">
    <div class="card m-3 border-0">
        <div class="card-body">
            <a href="/admin-inscrito" class="mt-5">  Voltar </a>
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
                        <a class="nav-link active" href="/admin-parecerista-showa">Trabalhos para avaliar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin-parecerista-showb">Trabalhos já avaliados</a>
                    </li>
                </ul>
            </div>
            {{-- fim da tabs do ADMIN READ parecerista --}}

{{-- ------------------------------------------------------------------------------ --}}

            {{-- div lista de trabalhos --}}
            <div class="list-group-flush">

                <div class="list-group-item d-flex justify-content-between">
                    <h6 class=" font-weight-bold">Trabalhos designados</h6>
                    <h6 class="font-weight-bold col-md-2 text-center">Retirar Parecerista</h6>
                </div>

                <div class="d-flex flex-column list-group-item">

                    <div class="d-flex flex-row align-items-between ">
                        <div class="d-flex flex-column col-md-10">
                            <p class="">Some quick example text to build on the card title and make up the bulk of
                                the card's content. </p>

                            <small>Autor: John Doe</small>
                            <small>Parecer: aguardando </small>
                        </div>
                        <div class="btn-group-vertical btn-group-sm col-2" role="group">
                            <a class="d-flex justify-content-center align-items-center btn btn-outline-primary " href="/admin-parecerista-substituir"> retirar e substituir</a>
                            <button type="submit" class="btn btn-outline-primary"> apenas retirar </button>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-column list-group-item">

                    <div class="d-flex flex-row align-items-between ">

                        <div class="d-flex flex-column col-md-10">
                            <p class="">Some quick example text to build on the card title and make up the bulk of
                                the card's content. </p>

                            <small>Autor: John Doe</small>
                            <small>Parecer: aguardando </small>
                        </div>
                        <div class="btn-group-vertical btn-group-sm col-2" role="group">
                            <a class="d-flex justify-content-center align-items-center btn btn-outline-primary " href="/admin-parecerista-substituir"> retirar e substituir</a>
                            <button type="submit" class="btn btn-outline-primary"> apenas retirar </button>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-column list-group-item">

                    <div class="d-flex flex-row align-items-between ">

                        <div class="d-flex flex-column col-md-10">
                            <p class="">Some quick example text to build on the card title and make up the bulk of
                                the card's content. </p>

                            <small>Autor: John Doe</small>
                            <small>Parecer: aguardando </small>
                        </div>
                        <div class="btn-group-vertical btn-group-sm col-2" role="group">
                            <a class="d-flex justify-content-center align-items-center btn btn-outline-primary " href="/admin-parecerista-substituir"> retirar e substituir</a>
                            <button type="submit" class="btn btn-outline-primary"> apenas retirar </button>
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