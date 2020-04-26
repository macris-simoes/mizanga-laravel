@extends('template')

@section('content')


<div class="container shadow mt-4">

  <!-- Titulo -->
  <div>
    <div class="mb-3">
      <h4 class="display-3">Avaliar Trabalho</h4>
      <p class="lead font-italic"></p>
    </div>

    <!-- Inicio-->
    <div>
      <div>
        <p><strong>{{$dadosTrabalho->abstract_title}}</strong></p> 
        <p>Código do trabalho: {{$dadosTrabalho->id}}</p>
        <p>Data de submissão: {{date('d/m/Y', strtotime($dadosTrabalho->created_at))}}</p>
      </div>
    </div>
    <!-- Resumo -->

    <div class="form-group mt-4">
      <label for="exampleFormControlTextarea1">Resumo</label>
      <textarea class="form-control" id="exampleFormControlTextarea1"
        rows="4">{{$dadosTrabalho->abstract_body}}</textarea>
    </div>

    <div>
      <div>
        <p>Palavras-chave: {{$dadosTrabalho->first_keyword}}, {{$dadosTrabalho->second_keyword}}, {{$dadosTrabalho->third_keyword}}. </p>
      </div>
      <div>
        <p>Eixo temático: {{$dadosTrabalho->axis}}</p>
      </div>
    </div>
    
      <p>Avaliar Trabalho</p>
      <form method="POST" name="" enctype="multipart/form-data">
        @csrf
        <select class="form-control mb-4" name="rate_work">
          <option selected disabled>Escolha...</option>
          <option value="aprovado">Aprovado</option>
          <option value="recusado">Recusado</option>
          </select>
        @error('rate_work')
          <div class="text-danger">{{ $message }}</div>
          @enderror
      
        <!--Add arquivo -->
        <p>Incluir Parecer</p>
        <div class="custom-file mb-4">
          <input type="file" class="custom-file-input" id="customFile" name="include_evaluation">
          <label class="custom-file-label" for="customFile"></label>
        </div>
        @error('include_evaluation')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        <div class="my-4">
          <button type="submit" class="btn btn-primary" style="width: 120px">Enviar</button>
          <a href="/parecerista" class="btn btn-primary" style="width: 120px">Voltar</a>
        </div>
      </form>
  </div>

</div>

@endsection