@extends('template')
@section('content')
@include('admin-congresso-pills')

{{-- ---------------------------------------------------------------------------- --}}

<div class="container mt-3 col-md-10 shadow">
    <div class="card m-3 border-0">
        <div class="card-body">
            <a href="/admin-parecerista">Voltar</a>
            <h5 class="card-title">{{$parecerista->appraiser_name}}</h5>
            <h6 class="card-subtitle mt-4 mb-2">Eixos definidos para este parecerista</h6>
            <div>
                @foreach($eixosParecerista as $eixoParecerista)
                <small>{{$eixoParecerista->axis}}</small>
                <br>
                @endforeach
            </div>
                

            {{-- início da tabs do ADMIN READ parecerista --}}

            <div>
                <ul class="nav nav-tabs my-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link " href="/admin-parecerista-showa/{{$parecerista_id}}">Trabalhos para avaliar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin-parecerista-showb/{{$parecerista_id}}">Trabalhos já avaliados</a>
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
                                
                                <button type="submit" class="btn btn-warning border border-dark mt-1 py-2"> ver </button>
                                <button type="submit" class="btn btn-warning border border-dark mt-1 py-2"> apagar </button>
                            
                            </div>
                        </div>
                    </div>
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

                                <button type="submit" class="btn btn-warning border border-dark mt-1 py-2"> ver </button>
                                <button type="submit" class="btn btn-warning border border-dark mt-1 py-2"> apagar </button>
                            
                            </div>
                        </div>
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