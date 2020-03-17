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
        <a class="nav-item nav-link" id="nav-infopessoal-tab" data-toggle="tab" href="#nav-infopessoal" role="tab" aria-controls="nav-infopessoal" aria-selected="false">Informações pessoais</a>
        <a class="nav-item nav-link" id="nav-trabalho-tab" data-toggle="tab" href="#nav-trabalho" role="tab" aria-controls="nav-trabalho" aria-selected="false">Trabalhos cadastrados</a>
        <a class="nav-item nav-link" id="nav-novotrabalho-tab" data-toggle="tab" href="#nav-novotrabalho" role="tab" aria-controls="nav-novotrabalho" aria-selected="false">Cadastrar trabalho</a>
      </div>
    </nav>
    <!-- fim do menu das tabs -->


    <!-- início do conteúdo das tabs ATENÇÃO: os IDs do menu e do conteúdo tem que ser iguais -->
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
       @include('inscrito-home')
      </div>
      <div class="tab-pane fade" id="nav-infopessoal" role="tabpanel" aria-labelledby="nav-infopessoal-tab">
        @include('inscrito-infopessoais')
      </div>
      <div class="tab-pane fade" id="nav-trabalho" role="tabpanel" aria-labelledby="nav-trabalho-tab">
        @include('inscrito-trabalhos-cadastrados')
      </div>
      <div class="tab-pane fade" id="nav-novotrabalho" role="tabpanel" aria-labelledby="nav-novotrabalho-tab">
        @include('inscrito-enviar-trabalho')
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