<!DOCTYPE html>
<html lang="en">
 @include('includes.head')

<body>
  <style>
    html {
      scroll-behavior: smooth;
    }

    .contador {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 100%;
      height: 50%;
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
      <div class="contador my-4">
        <iframe src="http://free.timeanddate.com/countdown/i73ylhfn/n233/cf12/cm0/cu4/ct0/cs0/ca0/cr0/ss0/cac000/cpc000/pcfff/tcfff/fs100/szw500/szh210/tatTEMPO%20PARA%20O%20FINAL%20DAS%20INSCRI%C3%87%C3%95ES/tac000/tpc000/mac000/mpc000/iso2020-11-16T00:00:00" allowTransparency="true" frameborder="0" width="553" height="105"></iframe>
      </div>

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
</body>

</html>