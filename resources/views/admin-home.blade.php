@extends('template')
@section('content')
<div class="container">
 @include('includes.admin-congresso-pills')
</div>

<!-- início div container -->
<div class="container">

  <!-- Cabeçalho -->
  <div class="row p-3">

    <aside class="col-md-4 col-sm-12 px-0 bg-white rounded shadow-sm">
      <img class="m-auto d-block" style="width:80%" src="/img/mizangueras.gif" alt="">
      <h1 class="text-center">{{$congresso->name_conference}}</h1>
      <p class="lead text-center">de {{date('d/m/Y', strtotime($congresso->event_start_date))}} a {{date('d/m/Y', strtotime($congresso->event_end_date))}} <br> Veja como estão as coisas!</p>
    </aside>

    <!-- início cards menores -->
    <section class="card-group col-md-8">

      <!-- início card Inscritos -->
      <div class="card col-md-4 border-0 pt-2 rounded shadow-sm">
        <a href="/admin/inscrito">
        <h5 class="card-title font-weight-bold text-primary">Inscritos</h5>
        <!-- aqui tem php hein -->
        <div class="">
            Inscritos:
            @if(isset($totalInscritos))
            {{$totalInscritos}}
            @else
            0
            @endif
             </p>
        </div>
      </a>
      </div>
      <!-- fim card Inscritos -->

      <!-- início card trabalhos -->
      <div class="card col-md-4 border-0 pt-2 rounded shadow-sm">
        <a href="/admin/trabalho">
        <h5 class="card-title font-weight-bold  text-primary">Trabalhos</h5>
        <!-- aqui tem php hein -->
        
          <div class="">
            Trabalhos submetidos:
            @if(isset($trabalhosSubmetidos)) 
            {{$trabalhosSubmetidos}}
            @else
            0
            @endif
          
            Trabalhos avaliados:
            @if(isset($trabalhosAvaliados))
            {{$trabalhosAvaliados}}
            @else
            0
            @endif 
          </div>
        </a>
        
      </div>
      <!-- fim card trabalhos -->

      <!-- início card pareceristas -->
      <div class="card col-md-4 border-0 pt-2 rounded shadow-sm">
        <a href="/admin/parecerista">
        <h5 class="card-title  font-weight-bold text-primary">Pareceristas</h5>
               
        <div class="">
          Pareceristas cadastrados: 
          @if(isset($totalPareceristas))
          {{$totalPareceristas}}
          @else
          0
          @endif 
        </div>
      </a>
      </div>
      <!-- fim card pareceristas -->

      <!-- início card maior (prazos) -->
      <div class="col-md-12 pt-2 mt-2 rounded shadow-sm">
        <h5 class="card-title font-weight-bold text-primary">Prazos</h5>
        <!-- aqui tem php hein -->
        <div class="card-text">Período de inscrições: 14/03/2020 - 01/05/2020</div>
        <div class="card-text"> Inscrição de trabalhos: 
          <ul>
            @forelse ($inscricoesTrabalho as $trabalho)
            <ul>
            {{$trabalho->work_modality}} : 
              {{date('d/m/Y', strtotime($trabalho->work_start_date))}} -
              {{date('d/m/Y', strtotime($trabalho->work_end_date))}} 
            </ul>
            
            @empty
            Aguardando informações...
            @endforelse
          </ul>
        
      </div>
      <!-- fim card maior (prazos) -->

    </section>
    <!-- fim cards menores -->

  </div>
  <!-- fim div row -->

</div>
<!-- fim div container -->
@endsection