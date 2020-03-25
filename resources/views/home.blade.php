<!DOCTYPE html>
<html lang="en">
 @include('includes.head')

<body>
  <style>
    html {
      scroll-behavior: smooth;
    }

    .contador, .regressiva {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 100%;
      height: 50%;
      font-size: 2rem;
      font-weight: bold;
      font-family: 'Roboto';
    }
    .regressiva {      
      font-size: 3rem;
    }
  </style>
  <div class="container-fluid" id="topo">
    <div>
      @include('includes.navbar-home')
    </div>
  </div>

  <main class="container">

    <div class="bg-primary py-4" style="height:50%">
      <p class="text-white display-3 ml-3 font-weight-bold">XXI CONGRESSO</p>
      <p class="text-white display-3 ml-3 font-weight-bold">NACIONAL XXXXX</p>

      <div>
        <div class="ml-3">
          <i class="material-icons text-white"> room </i>
          <p style="display:inline-block;vertical-align: middle;" class="text-white"> PUC-SP </p>
          <i class="material-icons text-white"> today </i>
          <p style="display:inline-block;vertical-align: middle;" class="text-white">16 a 19 de novembro 2020 </p>
        </div>
      </div>
    </div>

    <div class="border border-primary my-4">
      <!-- Contador -->
      <div class="contador">Tempo para o final das inscrições</div>
      <div class="regressiva my-1" id="contador"></div>

      <!--botão inscreva-se -->
      <div class="my-4 d-flex justify-content-center">
        <a href="./inscricao-usuario" class="p-1 px-5 mb-3 btn btn-primary" role="button"> Clique aqui para realizar sua inscrição</a>
      </div>
    </div>

    <!-- Sobre o Congresso -->
    <div>
      <h2 class="text-center my-3 display-4">Sobre o Congresso Nacional XXXXXX</h2>
      <p class="text-justify mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, nam! Rem perferendis vitae ex nihil, distinctio magnam cum alias amet maiores consequatur deserunt neque, possimus, dolore a nam unde hicLorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, nam! Rem perferendis vitae ex nihil, distinctio magnam cum alias amet maiores consequatur deserunt neque, possimus, dolore a nam unde hic.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, nam! Rem perferendis vitae ex nihil, distinctio magnam cum alias amet maiores consequatur deserunt neque, possimus, dolore a nam unde hic.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, nam! Rem perferendis vitae ex nihil, distinctio magnam cum alias amet maiores consequatur deserunt neque, possimus, dolore a nam unde hic.</p>
    </div>

    <!-- Informacoes e datas -->
    <h2 class="text-center my-3 display-4">Informações e datas</h2>

    <div class="row my-4">
      <div class="col-sm-4">
        <div class="card border-primary">
          <div class="card-body">
            <h5 class="card-title">Local</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, voluptatem in. Reprehenderit, enim. Rem dolor dolore tempore porro, dolores fuga aliquam numquam quos magnam quas alias distinctio optio neque assumenda.</p>
            <a href="#" class="btn btn-primary">Ver mais</a>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="card border-primary">
          <div class="card-body">
            <h5 class="card-title">Cronograma</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga aspernatur necessitatibus maxime, doloribus magni facere at sequi laudantium iusto autem inventore dolorum, mollitia dolorem praesentium vel dicta quis saepe quidem!</p>
            <a href="#" class="btn btn-primary">Ver mais</a>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="card border-primary">
          <div class="card-body">
            <h5 class="card-title">Palestrantes</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga aspernatur necessitatibus maxime, doloribus magni facere at sequi laudantium iusto autem inventore dolorum, mollitia dolorem praesentium vel dicta quis saepe quidem!</p>
            <a href="#" class="btn btn-primary">Ver mais</a>
          </div>
        </div>
      </div>
    </div>

    <!-- voltar ao topo da pagina -->
    <div class="text-right">
      <a href="#topo" style="text-decoration:none">
        <p style="display:inline-block;vertical-align: middle;"> voltar ao topo </p>
        <i class="material-icons"> keyboard_arrow_up
        </i>
      </a>
    </div>
  </main>
  <div>
    @include('includes.footer')
    @include('includes.script')
  </div>

  <script>
    // Definino a data para o countdown
    var dataDaRegressiva = new Date("Oct 2, 2020 23:59:59").getTime();

    function executaRegressiva() {
      // Pega a data e a hora do dia de hoje
      var agora = new Date().getTime();
        
      // Encontra a diferença entre a data de hoje e a data do countdown
      var diferenca = dataDaRegressiva - agora;
        
      // Transformando a diferença em dias, horas, minutos e segundos 
      var dias = Math.floor(diferenca / (1000 * 60 * 60 * 24));
      var horas = Math.floor((diferenca % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutos = Math.floor((diferenca % (1000 * 60 * 60)) / (1000 * 60));
      var segundos = Math.floor((diferenca % (1000 * 60)) / 1000);
        
      // Inserindo o resultado (dias, horas, minutos e segundos) no elemento (id="contador")
      document.getElementById("contador").innerHTML = dias + "d " + horas + "h "
      + minutos + "m " + segundos + "s ";
        
      // Quando o tempo de inscrições acaba, aparece "Inscrições encerradas" no elemento
      if (diferenca < 0) {
        clearInterval(x);
        document.getElementById("contador").innerHTML = "Inscrições Encerradas!";
      }
    }
    executaRegressiva();
    // Atualiza a contagem regressiva a cada 1 segundo
    var x = setInterval(executaRegressiva, 1000);
  </script>

</body>

</html>