@extends('template')
    
    <!-- início divona container -->
    <div class="container">
      <!-- Início do menu das tabs ATENÇÃO: os IDs do menu e do conteúdo tem que ser iguais-->
      <nav>
        <div class="nav nav-pills" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Início</a>
          
          <a class="nav-item nav-link font-weight-bolder" id="nav-congresso-tab" data-toggle="tab" href="#nav-congresso" role="tab" aria-controls="nav-congresso" aria-selected="false">Congresso</a>
          <a class="nav-item nav-link" id="nav-inscrito-tab" data-toggle="tab" href="#nav-inscrito" role="tab" aria-controls="nav-inscrito" aria-selected="false">Inscritos</a>
          
          <a class="nav-item nav-link" id="nav-trabalho-tab" data-toggle="tab" href="#nav-trabalho" role="tab" aria-controls="nav-trabalho" aria-selected="false">Trabalhos</a>
          
          <a class="nav-item nav-link" id="nav-parecerista-tab" data-toggle="tab" href="#nav-parecerista" role="tab" aria-controls="nav-parecerista" aria-selected="false">Pareceristas</a>
        </div>
      </nav>
      <!-- fim do menu das tabs -->
      
      
      <!-- início do conteúdo das tabs ATENÇÃO: os IDs do menu e do conteúdo tem que ser iguais -->
      <div class="tab-content" id="nav-tabContent">
        
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
          @include('admin-home')
        </div>
        
        <div class="tab-pane fade" id="nav-congresso" role="tabpanel" aria-labelledby="nav-congresso-tab">
          {{-- @include('admin-config-congresso') --}}
          @include('admin-congresso-pills')
        </div>
        
        <div class="tab-pane fade" id="nav-inscrito" role="tabpanel" aria-labelledby="nav-inscrito-tab">
          @include('admin-config-inscrito')
        </div>
        
        <div class="tab-pane fade" id="nav-trabalho" role="tabpanel" aria-labelledby="nav-trabalho-tab">
          @include('admin-config-trabalho')
        </div>
        
        <div class="tab-pane fade" id="nav-parecerista" role="tabpanel" aria-labelledby="nav-parecerista-tab">
          @include('admin-config-parecerista')
        </div>
        
      </div>
      <!-- fim do conteúdo das tabs -->
      
      <!-- fim da divona container -->
    </div>
