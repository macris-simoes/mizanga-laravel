@extends('template')

@section('content')

<body>
  
  <!-- Titulo -->
  <div>
    <div class="mb-1 pt-1">
      <h4 class="display-3">Avaliar Trabalho</h4>
      <p class="lead font-italic"></p>
    </div>

    <!-- Inicio-->
    <div>
      <div>
        <p><strong>Psicologia da saúde e psicologia positiva: perspectivas e desafios</strong></p>
      </div>
      <div>
        <p>Código do trabalho: 12301</p>
      </div>
      <div>
        <p>Data de submissão: 26/02/2020 - 17:22</p>
      </div>
      <div></div>
    </div>
    <!-- Resumo -->

    <form method="POST" name="">
      @csrf
      <div class="form-group mt-4">
        <label for="exampleFormControlTextarea1">Resumo</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4">O presente artigo visa a discutir a interface entre Psicologia da saúde e Psicologia positiva, destacando a relevância dos aspectos positivos do desenvolvimento humano como foco de pesquisas e intervenções. Salienta-se a necessidade de avanços nos estudos relacionados aos fatores protetores e de manutenção do desenvolvimento humano saudável. Na discussão em foco neste artigo, a Psicologia da saúde e a Psicologia positiva têm importante papel na compreensão dos aspectos envolvidos no enfrentamento da doença bem como na manutenção da saúde da pessoa, e apontam a relevância do investimento científico na investigação dos fatores de proteção da saúde.&#13;&#10;Referências&#13;&#10;ASPINWALL, L.; STAUDINGER, U. A psychology of human strengths: some central issues of an emerging field. In: A psychology of human strengths: fundamental questions and future directions for a Positive Psychology. Washington: American Psychological Association, 2003. p. 9-22.&#13;&#10;BRANNON, L.; FEIST, J. Psicología de la Salud. Madrid: Thomson Learning, 2001.&#13;&#10;CASTRO, E., BORNHORD, E. Psicologia da saúde x Psicologia hospitalar: definições e possibilidades de inserção profissional. Psicologia: Ciência e Profissão, Brasília, v. 24, n. 3, p. 48-57, 2004.&#13;&#10;CULLOFORD, L. Spirituality and clinical care. British Medical Journal, London, v. 325, p. 1434-1436, 2002.</textarea>
      </div>
    </form>
    <div>
      <div>
        <p>Palavras-chave: Psicologia da saúde, Psicologia positiva, Proteção da saúde. </p>
      </div>
      <div>
        <p>1° Opção de Grupo de Trabalho: Psicologia da saúde</p>
      </div>
      <div>
        <p>2° Opção de Grupo de Trabalho: Psicologia social, políticas públicas e direitos sociais</p>
      </div>
      <div>
        <p>3° Opção de Grupo de Trabalho: <em> n.a. </em></p>
      </div>
    </div>
    <form>
      <p>Avaliar Trabalho</p>
      <select class="form-control mb-4" name="rate_work">
        <option selected disabled>Escolha...</option>
        <option value="aprovado">Aprovado</option>
        <option value="recusado">Recusado</option>
        <option value="aprovado com poster">Aprovado com pôster</option>
        <option value="encaminhado para outra opção de GT">Encaminhado para Opção 2° ou 3° de GT</option>
      </select>
    </form>
    <div></div>
    <!--Add arquivo -->
    <form method="POST" name="" enctype="multipart/form-data">
      @csrf
      <p>Incluir Parecer</p>
      <div class="custom-file mb-4">
        <input type="file" class="custom-file-input" id="customFile" name="include_evaluation">
        <label class="custom-file-label" for="customFile"></label>
      </div>
    </form>
    <div class="my-4">
      <button type="submit" class="btn btn-primary" style="width: 10%">Enviar</button>
      <a href="/parecerista" class="btn btn-primary" style="width: 10%">Voltar</a>
    </div>
  </div>
@endsection
