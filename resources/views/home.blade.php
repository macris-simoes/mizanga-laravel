@extends('template')

@section('content')

<style>
  html {
    scroll-behavior: smooth;
  }

  .contador,
  .regressiva {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 50%;
    font-size: 2rem;
    font-weight: bold;
    font-family: 'Roboto'sans-serif;
  }

  .regressiva {
    font-size: 3rem;
  }
</style>

<main class="container" id="topo">

  <div class="bg-primary py-4" style="height:50%">
    <p class="text-white display-3 ml-3 font-weight-bold">{{$infosCongresso->name_conference}}</p>

    <div>
      <div class="ml-3">
        <i class="material-icons text-white"> room </i>
        <p style="display:inline-block;vertical-align: middle;" class="text-white">
          {{$infosCongresso->promoting_entity}} </p>
        <i class="material-icons text-white"> today </i>
        <p style="display:inline-block;vertical-align: middle;" class="text-white">
          {{date('d/m/Y', strtotime($infosCongresso->event_start_date))}} a
          {{date('d/m/Y', strtotime($infosCongresso->event_end_date))}}</p>
      </div>
    </div>
  </div>

  <div class="border border-primary my-4">
    <!-- Contador -->
    <div class="contador text-center my-4">Tempo para o final das inscrições</div>
    <div class="regressiva my-1" id="contador"></div>

    <!--botão inscreva-se -->
    <div class="my-4 d-flex justify-content-center">
      <a href="./inscricao-usuario" class="p-1 px-5 mb-3 btn btn-primary" role="button"> Clique aqui para realizar sua
        inscrição</a>
    </div>
  </div>

  <!-- Sobre o Congresso -->
  <div>
    <h2 class="text-center my-3 display-4">Sobre o {{$infosCongresso->name_conference}}</h2>
    <p class="text-justify mb-4">
      Após seis meses de planejamento, discussões, (des)(re)construção, <em>commits</em> frustrados e frustantes, eis que surgiu! O Mizanga nasceu da ideia de colaborar com as Ciências Humanas na realização de suas atividades acadêmico-científicas.
      A estrutura das Universidades brasileiras está baseada em três pilares: ensino, extensão e pesquisa. A pesquisa
      científica tem etapas importantes para a produção de conhecimento, uma delas (a última de um ciclo que pode durar
      anos) é a publicação de resultados à comunidade científica.
      Para isso acontecer, os pesquisadores podem escrever artigos científicos ou participar de congressos, que são
      reuniões com pesquisadores convidados e inscritos, que enviam seus trabalhos para serem apresentados à comunidade
      científica.
      Um congresso científico precisa de uma organização para receber todos os trabalhos inscritos, assim como um
      conjunto de critérios para definir quais trabalhos (pesquisas) serão aceitos e quais serão rejeitados.
      <strong>Este é o nosso projeto: criar um sistema de gerenciamento de congressos científicos</strong>, buscando
      automatização do
      processo de envio de inscrição de participantes e de trabalhos, o que atualmente é feito manualmente (por e-mail),
      em função do custo e da falta de conhecimento técnico.
    </p>
  </div>

  <!-- Informacoes e datas -->
  <h2 class="text-center my-3 display-4">Informações e datas</h2>

  <div class="row my-4">
    <div class="col-sm-4 my-2">
      <div class="card border-primary">
        <div class="card-body">
          <h5 class="card-title">Local</h5>
          <p class="card-text">Um suntuoso prédio na Faria Lima, o Mizanga Institute of Technology ... </p>
          <a href="#" class="btn btn-primary">Ver mais</a>
        </div>
      </div>
    </div>

    <div class="col-sm-4 my-2">
      <div class="card border-primary">
        <div class="card-body">
          <h5 class="card-title">Cronograma</h5>
          <p class="card-text">Saiba mais sobre datas importantes, prazos e outras informações relevantes! </p>
          <a href="#" class="btn btn-primary">Ver mais</a>
        </div>
      </div>
    </div>

    <div class="col-sm-4 my-2">
      <div class="card border-primary">
        <div class="card-body">
          <h5 class="card-title">Palestrantes</h5>
          <p class="card-text">Clique aqui e conheça as pessoas que tornaram o Mizanga possível!</p>
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

<script src="/js/home-regressiva.js"></script>

@endsection