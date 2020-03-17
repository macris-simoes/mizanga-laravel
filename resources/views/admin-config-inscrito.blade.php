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

          <!-- início da div form-row -->
          <div class="form-row">
            <!-- identificação -->
              <div class="col-md-12 mb-4">
                <label class="font-weight-bold" for="validationTooltip01">Identificação</label>
                <input type="text" class="form-control" id="validationTooltip01" placeholder="Escolha um nome" required>
              </div>

            <!-- Prazo de início -->
              <div class="col-md-4">
                <label class="font-weight-bold" for="validationTooltip04">Início das inscrições</label>
                <input type="date" class="form-control" id="validationTooltip04" placeholder="dd/mm/aaaa" required>
              </div>

            <!-- Prazo de término -->
              <div class="col-md-4">
                <label class="font-weight-bold" for="validationTooltip05">Fim das inscrições</label>
                <input type="date" class="form-control" id="validationTooltip05" placeholder="dd/mm/aaaa" required>
              </div>

            <!-- Anexar comprovante? -->
              <div class="col-md-12 mt-3 ">
                  <div class = "custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                    <label class="custom-control-label" for="customSwitch1">Anexar comprovante</label>
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