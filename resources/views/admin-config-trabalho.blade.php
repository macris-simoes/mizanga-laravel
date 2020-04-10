@extends('template')

@section('content')




{{-- início da pills do ADMIN --}}
<!-- início divona container -->
<div class="container">
  <!-- Início do menu das tabs -->
  <nav>
    <div class="nav nav-pills" id="nav-tab" role="tablist">
      <a class="nav-item nav-link " href="/admin-home">Início</a>

      <a class="nav-item nav-link font-weight-bolder" href="admin-congresso">Congresso</a>

      <a class="nav-item nav-link " href="admin-inscrito">Inscritos</a>

      <a class="nav-item nav-link active" href="admin-trabalho">Trabalhos</a>

      <a class="nav-item nav-link " href="admin-parecerista">Pareceristas</a>
    </div>
  </nav>
  <!-- fim do menu das tabs -->
  <!-- fim da divona container -->
</div>
{{-- fim da pills do ADMIN --}}


<!-- início divona container -->
<div class="container">

  <!-- início Cabeçalho -->
  <div class="mb-1 pt-1">
    <h1 class="display-3">Trabalhos</h1>
    <p class="lead font-italic"></p>
  </div>
  <!-- fim Cabeçalho -->

  <!-- início div row -->
  <div class="row">

    <!-- Início lista de modalidades -->
    <div class=" list-group-flush col-md-3 border rounded">
      <h6 class="my-1 font-weight-bold">Modalidades</h6>
      <li class="list-group-item"> <a href="#">Pôster</a></li>
      <li class="list-group-item"> <a href="#">Comunicação Oral</a></li>
      <li class="list-group-item"> <a href="#"> + Nova</a></li>
    </div>
    <!-- fim lista de modalidades -->

    <!-- início div config -->
    <div class="col-md-9 my-1">

      <!-- início do form de modalidades -->
      <form>
        @csrf
        <!-- início da div form-row -->
        <div class="form-row">

          <div class="font-weight-bold form-group col-md-12">
            <label for="work_modality">Identificação</label>
            <input type="text" class="form-control" id="work_modality" placeholder="Escolha um nome"
              name="work_modality" required>
          </div>

          <div class="form-group col-md-5">
            <label for="work_start_date">Início das inscrições</label>
            <input type="datetime-local" class="form-control" id="work_start_date" placeholder="dd/mm/aaaa"
              name="work_start_date" required>
          </div>

          <div class="form-group col-md-5">
            <label for="work_end_date">Fim das inscrições</label>
            <input type="datetime-local" class="form-control" id="work_end_date" placeholder="dd/mm/aaaa"
              name="work_end_date" required>
          </div>

          <div for="coauthor_quantity" class="form-group col-md-2" data-toggle="tooltip" data-placement="right"
            title="Sem limite? Deixe em branco">
            <label>Coautores</label>
            <input type="number" class="form-control" id="coauthor_quantity" name="coauthor_quantity">
          </div>

        </div>
        <!-- fim da div form-row -->

        <hr>

        <!-- div Parâmetros do trabalho -->
        <div class="form-row">

          <div class=" form-group form-row col-md-6">

            <h6 class="col-md-12">Configurar título</h6>
            <div class="col-md-6">
              <label for="abstract_title_min_char">Mínimo de caracteres</label>
              <input class="form-control" type="number" id="abstract_title_min_char" placeholder="inserir número"
                name="abstract_title_min_char">
            </div>

            <div class="col-md-6">
              <label for="abstract_title_max_char">Máximo de caracteres</label>
              <input class="form-control" type="number" id="abstract_title_max_char" placeholder="inserir número"
                name="abstract_title_max_char">
            </div>
          </div>


          <div class="form-group form-row col-md-6">

            <h6 class="col-md-12">Configurar resumo</h6>
            <div class="col-md-6">
              <label for="abstract_min_char">Mínimo de caracteres</label>
              <input class="form-control" type="number" id="abstract_min_char" placeholder="inserir número"
                name="abstract_min_char">
            </div>

            <div div class="col-md-6">
              <label for="abstract_max_char">Máximo de caracteres</label>
              <input class="form-control" type="number" id="abstract_max_char" placeholder="inserir número"
                name="abstract_max_char">
            </div>

          </div>

        </div>
        <!-- Fim da div dos Parâmetros do trabalho -->
        <div class="form-row">
          <div class="col-md-12">
            <label for="author_instructions">Texto de instrução aos autores</label>
            <textarea class="form-control" id="author_instructions" rows="3" name="author_instructions"></textarea>
          </div>

          <div class="col-md-12">
            <button class="mt-3 btn btn-outline-primary" type="submit" style="width:120px">OK</button>
          </div>
        </div>

      </form>
      <!-- fim do form de modalidades -->
    </div>
    <!-- fim div config -->

  </div>
  <!-- fim div row -->

</div>
<!-- fim divona container -->

@endsection