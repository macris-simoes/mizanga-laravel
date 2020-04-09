@extends('template')

@section('content')


{{-- início da pills do ADMIN --}}
<!-- início divona container -->
<div class="container">
  <!-- Início do menu das tabs -->
  <nav>
    <div class="nav nav-pills" id="nav-tab" role="tablist">
      <a class="nav-item nav-link active" href="#nav-home">Início</a>

      <a class="nav-item nav-link font-weight-bolder" href="#nav-congresso">Congresso</a>

      <a class="nav-item nav-link" href="#nav-inscrito">Inscritos</a>

      <a class="nav-item nav-link" href="#nav-trabalho">Trabalhos</a>

      <a class="nav-item nav-link" href="#nav-parecerista">Pareceristas</a>
    </div>
  </nav>
  <!-- fim do menu das tabs -->
  <!-- fim da divona container -->
{{-- </div> --}}
{{-- fim da pills do ADMIN --}}

<!-- início div container -->
{{-- <div class="container"> --}}

  <!-- Cabeçalho -->
  <div class="row">
    <aside class="col-md-4 col-sm-12 m-2 px-0">
      <img class="mx-auto d-block" style="width:80%" src="./img/mizangueras.gif" alt="">
      <h1 class="text-center">1º Encontro das mizangueiras</h1>
      <p class="lead text-center">de 28/10/2019 a 28/04/2020 <br> Veja como estão as coisas!</p>
    </aside>

    <!-- início card deck -->
    <section class="card-group col-md-8 row mt-2 flex-wrap">

      <!-- início card Inscritos -->
      <div class="card col-md-4 pt-2">
        <h5 class="card-title font-weight-bold text-primary">Inscritos</h5>
        <!-- aqui tem php hein -->
        <p class="card-text">Inscritos: 1000 </p>
      </div>
      <!-- fim card Inscritos -->

      <!-- início card trabalhos -->
      <div class="card col-md-4 pt-2 ">
        <h5 class="card-title font-weight-bold  text-primary">Trabalhos</h5>
        <!-- aqui tem php hein -->
        <p class="card-text">Trabalhos inscritos: 1234 </p>
        <p class="card-text">Trabalhos avaliados: 0123 </p>
        <p class="card-text">Trabalhos aguardando avaliação: 0123 </p>
      </div>
      <!-- fim card trabalhos -->

      <!-- início card pareceristas -->
      <div class="card col-md-4 pt-2 rounded-right">
        <h5 class="card-title font-weight-bold text-primary">Pareceristas</h5>
        <!-- aqui tem php hein -->
        <p class="card-text">Pareceristas convidados: 1234 </p>
        <p class="card-text">Pareceristas cadastrados: 0123 </p>
      </div>
      <!-- fim card pareceristas -->

      <!-- início card maior (prazos) -->
      <div class="col-md-12 pt-2 border rounded mt-2">
        <h5 class="card-title font-weight-bold text-primary">Prazos</h5>
        <!-- aqui tem php hein -->
        <p class="card-text">Abertura de inscrições: 25/01/2020 </p>
        <p class="card-text">Abertura para trabalhos: 25/01/2020 </p>
        <p class="card-text">Dilatação de prazo (<strong>Não divulgar</strong> esta informação): 25/01/2020 </p>
      </div>
      <!-- fim card maior (prazos) -->

    </section>
    <!-- fim card deck -->

  </div>
  <!-- fim div row -->

</div>
<!-- fim div container -->
@endsection