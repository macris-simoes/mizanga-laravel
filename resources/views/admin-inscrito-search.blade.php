{{-- início dos cards de resultado da busca --}}
@if (!isset($query))
@extends('template')
@include('admin-congresso-pills')
@section('content')

<div class="container my-5">

    <div class="container mt-3 col-md-10 shadow">

        <div class="col-lg-9 m-5">
            <h1 class="display-6">Sua busca não retornou resultados</h1>
            <p> Não encontrado </p>
            <a href="/admin-inscrito">Voltar para a busca</a>
        </div>


    </div>

    @endsection

    @endif

    @if(isset($query))

    <p class="p-3"> Resultado da busca <b> {{$query}} </b>: </p>
    <div class="bg-light d-flex justify-content-center">

        <div class="list-group col-md-10 my-3">
            @foreach($details as $inscrito)
            <a href="/admin-inscrito-ver/{{$inscrito->user_id}}" class="list-group-item list-group-item-action">
                <div class=" d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{$inscrito->name}}</h5>
                </div>
                <div class="d-flex flex-row align-items-start">

                    <small class="col-md-10">{{$inscrito->register_modality}} || {{$inscrito->email}}</small>

                </div>
            </a>
            @endforeach

        </div>
    </div>
    @endif

    {{-- fim do campo de busca --}}