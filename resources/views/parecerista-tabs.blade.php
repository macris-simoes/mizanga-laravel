<!DOCTYPE html>
<html lang="en">
    @include('includes.head')
<body>
<!-- navbar -->
  <div class="sticky-top">
    <div>
        @include('includes.navbar')
    </div>
  </div>
   
<!-- início divona container -->
  <div class="container">
    <!-- Início do menu das tabs ATENÇÃO: os IDs do menu e do conteúdo tem que ser iguais-->
    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Início</a>
        <a class="nav-item nav-link" id="nav-avaliar-trabalho-tab" data-toggle="tab" href="#nav-avaliar-trabalho" role="tab" aria-controls="nav-avaliar-trabalho" aria-selected="false">Avaliar trabalhos</a>
      </div>
    </nav>
    <!-- fim do menu das tabs -->


    <!-- início do conteúdo das tabs ATENÇÃO: os IDs do menu e do conteúdo tem que ser iguais -->
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        @include('parecerista-home')
      </div>
      <div class="tab-pane fade" id="nav-avaliar-trabalho" role="tabpanel" aria-labelledby="nav-avaliar-trabalho-tab">
        @include('parecerista-avaliar-trabalho')
      </div>
    </div>
    <!-- fim do conteúdo das tabs -->

  <!-- fim da divona container -->
  </div>
  
<!-- scripts e footer -->
  <div>
    
    @include('includes.footer')
    @include('includes.script')
  </div>

</body>
</html>