@extends('template')

@section('content')

{{-- início da pills do ADMIN --}}
<!-- início div container -->
<div class="container">
  <!-- Início do menu das tabs -->
  <nav>
    <div class="nav nav-pills" id="nav-tab" role="tablist">
      <a class="nav-item nav-link active" href="/admin-home">Início</a>

      <a class="nav-item nav-link font-weight-bolder" href="/admin-config-congresso">Congresso</a>

      <a class="nav-item nav-link" href="/admin-inscrito">Inscritos</a>

      <a class="nav-item nav-link" href="/admin-trabalho">Trabalhos</a>

      <a class="nav-item nav-link" href="/admin-parecerista">Pareceristas</a>
    </div>
  </nav>
  <!-- fim do menu das tabs -->
  <!-- fim da div container -->
</div>
{{-- fim da pills do ADMIN --}}


<!-- início div container -->
<div class="container">

  <!-- Cabeçalho -->
  <div class="row p-3 vh-100">

    <aside class="col-md-4 col-sm-12 px-0 bg-white rounded shadow-sm">
      <img class="m-auto d-block" style="width:80%" src="/img/mizangueras.gif" alt="">
      <h1 class="text-center">{{$congresso->name_conference}}</h1>
      <p class="lead text-center">de {{date('d/m/Y', strtotime($congresso->event_start_date))}} a {{date('d/m/Y', strtotime($congresso->event_end_date))}} <br> Veja como estão as coisas!</p>
    </aside>

    <!-- início cards menores -->
    <section class="card-group col-md-8">

      <!-- início card Inscritos -->
      <div class="card col-md-4 border-0 pt-2 rounded shadow-sm">
        <h5 class="card-title font-weight-bold text-primary">Inscritos</h5>
        <!-- aqui tem php hein -->
        <div class="list-group-flush">
          <p class="list-item">
            Inscritos:
            @if(isset($totalInscritos))
            {{$totalInscritos}}
            @else
            0
            @endif
             </p>
        </div>
      </div>
      <!-- fim card Inscritos -->

      <!-- início card trabalhos -->
      <div class="card col-md-4 border-0 pt-2 rounded shadow-sm">
        <h5 class="card-title font-weight-bold  text-primary">Trabalhos</h5>
        <!-- aqui tem php hein -->
        <div class="list-group-flush">
          <div class="list-group-item">
            Trabalhos submetidos:
            @if(isset($trabalhosSubmetidos)) 
            {{$trabalhosSubmetidos}}
            @else
            0
            @endif
          </div>
          <div class="list-group-item">
            Trabalhos avaliados:
            @if(isset($trabalhosAvaliados))
            {{$trabalhosAvaliados}}
            @else
            0
            @endif 
          </div>
        </div>
      </div>
      <!-- fim card trabalhos -->

      <!-- início card pareceristas -->
      <div class="card col-md-4 border-0 pt-2 rounded shadow-sm">
        <h5 class="card-title font-weight-bold text-primary">Pareceristas</h5>
        <!-- aqui tem php hein -->
        <div class="list-group-flush">
        <div class="list-group-item">
          Pareceristas cadastrados: 
          @if(isset($totalPareceristas))
          {{$totalPareceristas}}
          @else
          0
          @endif 
        </div>
        </div>
      </div>
      <!-- fim card pareceristas -->

      <!-- início card maior (prazos) -->
      <div class="col-md-12 pt-2 mt-2 rounded shadow-sm">
        <h5 class="card-title font-weight-bold text-primary">Prazos</h5>
        <!-- aqui tem php hein -->
        <div class="card-text">Abertura de inscrições: </div>
        <div class="card-text">Abertura para trabalhos: {{date('d/m/Y', strtotime($inscricoesTrabalho->work_start_date))}} </div>
        <div class="card-text">Dilatação de prazo (<strong>Não divulgar</strong> esta informação):  </div>
      </div>
      <!-- fim card maior (prazos) -->

    </section>
    <!-- fim cards menores -->

  </div>
  <!-- fim div row -->

</div>
<!-- fim div container -->
@endsection