<!DOCTYPE html>
<html lang="pt-br">
@include('includes.head')

<body>
<!-- início divona container -->
  <div class="container">

  <!-- início Cabeçalho1 -->
      <div class="mb-1 pt-1">
        <h1 class="display-3">Inscritos</h1>
        <p class="lead font-italic"> Gerenciar modalidades de inscrição</p>
      </div>
  <!-- fim Cabeçalho1 -->

  <!-- início div row -->
    <div class= "row">

    <!-- Início lista de modalidades -->
      <div class=" list-group-flush col-md-3 border rounded">
      <h6 class="my-1 font-weight-bold">Modalidades</h6>
          <li class="list-group-item"> <a href="#">Estudante</a></li>
          <li class="list-group-item"> <a href="#">Profissional</a></li>
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
                  <div class = "custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="attach_receipt" name="attach_receipt">
                    <label class="custom-control-label" for="attach_receipt">Anexar comprovante</label>
                  </div>
              </div>

            <!-- botão -->
            <div class=" mt-4 col-md-12">
              <button class="btn btn-outline-primary" type="submit" style="width:120px">OK</button>
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

</body>
</html>