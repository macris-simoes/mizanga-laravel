@extends('template')

@section('content')
    

{{-- início da pills do ADMIN --}}
<!-- início div container -->
<div class="container">
  <!-- Início do menu das pills -->
  <nav>
    <div class="nav nav-pills" id="nav-tab" role="tablist">
      <a class="nav-item nav-link" href="/admin-home">Início</a>

      <a class="nav-item nav-link font-weight-bolder active" href="/admin-config-congresso">Congresso</a>

      <a class="nav-item nav-link " href="/admin-inscrito">Inscritos</a>

      <a class="nav-item nav-link" href="/admin-trabalho">Trabalhos</a>

      <a class="nav-item nav-link" href="/admin-parecerista">Pareceristas</a>
    </div>
  </nav>
  <!-- fim do menu das pills -->
  <!-- fim da div container -->
</div>
{{-- fim da pills do ADMIN --}}


{{-- início da tabs do ADMIN CONFIG INSCRITO --}}

<div class="container">

  <ul class="nav nav-tabs my-3" id="pills-tab" role="tablist">
      <li class="nav-item">
          <a class="nav-link " href="/admin-config-congresso">Configurar congresso</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin-config-eixos">Inserir Eixos</a>
      </li>
      <li class="nav-item">
          <a class="nav-link active" href="/admin-config-inscrito">Configurar modalidades de inscrição</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="/admin-config-trabalho">Configurar trabalhos</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="/admin-config-parecerista">Adicionar pareceristas</a>
      </li>
  </ul>

</div>
{{-- fim da tabs do ADMIN CONFIG CONGRESSO --}}


<!-- início div container -->
<div class="container shadow">
  
  <!-- início Cabeçalho1 -->
  <div>
    <h1 class="display-3">Inscritos</h1>
    <p class="lead font-italic"> Gerenciar modalidades de inscrição</p>
  </div>
  <!-- fim Cabeçalho1 -->
  
  <!-- início div row -->
  <div class= "row ">
    
    <!-- Início lista de modalidades -->
    <div class=" list-group-flush col-md-3 my-1 border-right">
      <h6 class="my-1 font-weight-bold">Modalidades</h6>
      <li class="list-group-item"> <a href="#">Estudante</a></li>
      <li class="list-group-item"> <a href="#">Profissional</a></li>
      <li class="list-group-item"> <a href="#"> + Nova</a></li>
    </div>
    <!-- fim lista de modalidades -->
    
    <!-- início div config -->    
    <div class="col-md-9 my-1">
      <!-- início do form de modalidades -->
      <form method="post" name="admin-config-incrito">
        @csrf
        
        <!-- início da div form-row -->
        <div class="form-row">
          <!-- identificação -->
              <div class="col-md-12 mb-4">
                <label class="font-weight-bold" for="modality">Identificação</label>
                <input type="text" class="form-control" id="modality" placeholder="Escolha um nome" name="register_modality" required>
              </div>

            <!-- Prazo de início -->
              <div class="col-md-4">
                <label class="font-weight-bold" for="register_start_date">Início das inscrições</label>
                <input type="date" class="form-control" id="register_start_date" placeholder="dd/mm/aaaa" name="register_start_date" required>
              </div>
              
              <!-- Prazo de término -->
              <div class="col-md-4">
                <label class="font-weight-bold" for="register_end_date">Fim das inscrições</label>
                <input type="date" class="form-control" id="register_end_date" placeholder="dd/mm/aaaa" name="register_end_date" required>
              </div>
              
              <!-- Anexar comprovante? -->
              <div class="col-md-12 mt-3 ">
                <div class="form-check custom-control custom-radio">
                <input type="radio" id="attach_receipt_yes" name="attach_receipt" class="custom-control-input" value="1">
                <label class="custom-control-label" for="attach_receipt_yes">Sim</label>
              </div>
              <div class=" form-check custom-control custom-radio">
                <input type="radio" id="attach_receipt_no" name="attach_receipt" class="custom-control-input" value="0">
                <label class="custom-control-label" for="attach_receipt_no">Não</label>
              </div>
            </div>
            
            <!-- botão -->
            <div class=" mt-4 col-md-12">
              <button class="btn btn-primary" type="submit" style="width:120px">OK</button>
            </div>

          </div>
          <!-- fim da div form-row -->
        </form>
        <!-- fim do form de modalidades -->
        
      </div>
    <!-- fim div config --> 
    
  </div>
  <!-- fim div row -->
  
</div>
<!-- div container -->

@endsection