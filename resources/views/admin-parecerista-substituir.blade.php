@extends('template')
@section('content')
@include('includes/admin-congresso-pills')


{{-- ---------------------------------------------------------------------------- --}}

<div class="container shadow rounded mt-3 p-4">
  <a href="/admin/parecerista/visualizar"> Voltar </a>
  <h4 class="display-4">Enviar trabalho para outro avaliador</h4>

  <h6 class="mt-3">Avaliador de destino</h6>
  <div class="input-group  mb-4">
    <input type="text" class="form-control" placeholder="Insira um nome" aria-label="Inserir nome"
      aria-describedby="button-addon2">
    <div class="input-group-append">
      <button class="btn btn-primary" type="button" id="button-addon2">Inserir</button>
    </div>
  </div>

  <h6 class="mt-3"> Trabalho que será enviado</h6>

  <div class="d-flex flex-column py-2 px-3 border rounded">
    <p class="">Some quick example text to build on the card title and make up the bulk of
      the card's content. </p>
    <small>Autor: John Doe</small>
    <small>Parecer: aprovado </small>
  </div>

  <div class="d-flex flex-column col-1 p-0">
    <button type="submit" class="btn btn-primary my-2">Enviar</button>
    <a href="/admin/parecerista/visualizar" class="font-weigth-bold">Voltar </a>
  </div>
</div>

@endsection