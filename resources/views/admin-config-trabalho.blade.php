<!DOCTYPE html>
<html lang="pt-br">
@include('includes.head')

<body>

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
              <label for="validationTooltip01">Identificação</label>
              <input type="text" class="form-control" id="validationTooltip01" placeholder="Escolha um nome" name="abstract_id" required>
            </div>
          
            <div class="form-group col-md-5">
              <label for="validationTooltip04">Início das inscrições</label>
              <input type="datetime-local" class="form-control" id="validationTooltip04" placeholder="dd/mm/aaaa" name="start_date" required>
            </div>

            <div class="form-group col-md-5">
              <label for="validationTooltip05">Fim das inscrições</label>
              <input type="datetime-local" class="form-control" id="validationTooltip05" placeholder="dd/mm/aaaa" name="end_date" required>
            </div>

            <div for="validationTooltip06" class="form-group col-md-2" data-toggle="tooltip" data-placement="right" title="Sem limite? Deixe em branco">
              <label>Coautores</label>
              <input type="number" class="form-control" id="validationTooltip06" name="coauthor">
            </div>

          </div>
        <!-- fim da div form-row -->
          
          <hr>
             
        <!-- div Parâmetros do trabalho -->
          <div class="form-row">
          
            <div class=" form-group form-row col-md-6">

              <h6 class="col-md-12">Configurar título</h6>
              <div class="col-md-6">
                <label for="exampleFormControlTextarea1">Mínimo de caracteres</label>
                <input class="form-control" type="number" id="exampleFormControlTextarea1" placeholder="inserir número" name="title_min_char">
              </div>

              <div class="col-md-6">
                <label for="exampleFormControlTextarea2">Máximo de caracteres</label>
                <input class="form-control" type="number" id="exampleFormControlTextarea2" placeholder="inserir número" name="title_max_char">
              </div>
            </div>


            <div class="form-group form-row col-md-6">

              <h6 class="col-md-12">Configurar resumo</h6>
              <div class="col-md-6">
                <label for="exampleFormControlTextarea1">Mínimo de caracteres</label>
                <input class="form-control" type="number" id="exampleFormControlTextarea1" placeholder="inserir número" name="resume_min_char">
              </div>

              <div div class="col-md-6">
                <label for="exampleFormControlTextarea2">Máximo de caracteres</label>
                <input class="form-control" type="number" id="exampleFormControlTextarea2" placeholder="inserir número" name="resume_max_char">
              </div>
          
            </div>
          
          </div>
        <!-- Fim da div dos Parâmetros do trabalho -->
          <div class="form-row">
            <div class="col-md-12">
              <label for="exampleFormControlTextarea1">Texto de instrução aos autores</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="instructions_coauth"></textarea>
            </div>

            <div class="col-md-12">
              <button class="mt-3 btn btn-outline-info" type="submit" style="width:120px">OK</button>
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

</body>

</html>