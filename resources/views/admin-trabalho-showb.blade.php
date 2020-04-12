@extends('template')
@section('content')
@include('admin-congresso-pills')
  
  {{-- ---------------------------------------------------------------------------- --}}

  <div class="container mt-3 col-md-10 shadow">
    <div class="card m-3 border-0">
        <div class="card-body">
            <a href="/admin-inscrito" class="font-weigth-bold" style="width:120px">  Voltar </a>

            <h5 class="card-title">Maria Cristina Dancham Simões</h5>
            <h6 class="card-subtitle mb-2 text-muted">Estudante associado (1ª faixa) </h6>


            {{-- início da tabs do ADMIN READ INSCRITO --}}

            <div>
                <ul class="nav nav-tabs my-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link " href="/admin-trabalho-showa">Detalhes da inscrição</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active " href="/admin-trabalho-showb">Trabalhos inscritos</a>
                    </li>
                </ul>
            </div>
            {{-- fim da tabs do ADMIN READ INSCRITO --}}

{{-- ------------------------------------------------------------------------------ --}}

            {{-- div lista de trabalhos --}}
            <div class="list-group-flush">
                <h6 class="font-weight-bold list-group-item">Trabalhos inscritos</h6>

                <div class="d-flex flex-column list-group-item">

                    <div class="d-flex flex-row align-items-start ">

                        <div class="d-flex flex-column">
                            <p class="">Some quick example text to build on the card title and make up the bulk of
                                the card's content. Some quick example text to build on the card title and make up
                                the bulk of the card's content.</p>

                            <small>Parecerista: Fulana da Silva</small>
                            <small>Parecer: sim </small>
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

                            <small>Parecerista: Fulana da Silva</small>
                            <small>Parecer: sim </small>
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

                            <small>Parecerista: Fulana da Silva</small>
                            <small>Parecer: sim </small>
                        </div>

                        <button class="btn btn-primary ml-2"><svg class="bi bi-trash-fill" width="1em" height="1em"
                                viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M2.5 1a1 1 0 00-1 1v1a1 1 0 001 1H3v9a2 2 0 002 2h6a2 2 0 002-2V4h.5a1 1 0 001-1V2a1 1 0 00-1-1H10a1 1 0 00-1-1H7a1 1 0 00-1 1H2.5zm3 4a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7a.5.5 0 01.5-.5zM8 5a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7A.5.5 0 018 5zm3 .5a.5.5 0 00-1 0v7a.5.5 0 001 0v-7z"
                                    clip-rule="evenodd" />
                            </svg></button>
                    </div>
                </div>


                {{-- fim div lista de trabalhos (abaixo)--}}
            </div>
            {{-- fim card-body (abaixo) --}}
        </div>
        {{-- fim da div card (abaixo) --}}
    </div>

{{-- fim div container do background( abaixo) --}}
</div>

@endsection