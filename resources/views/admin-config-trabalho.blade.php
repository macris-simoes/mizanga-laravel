@extends('template')
@section('content')
@include('includes/admin-config-congresso-tabs')


{{-- fim da tabs do ADMIN CONFIG TRABALHO --}}

<!-- início div container -->
@if(session('mensagem'))
  <div class="alert alert-success container">{{session('mensagem')}}</div>
@endif
<div class="container shadow">

  <!-- início Cabeçalho -->
  <div class="mb-1 pt-1">
    <h1 class="display-3">Trabalhos</h1>
    <p class="lead font-italic"></p>
  </div>
  <!-- fim Cabeçalho -->

  <!-- início div row -->
  <div class="row">

    <!-- Início lista de modalidades -->
    <div class=" list-group-flush col-md-3 my-1 border-right">
      <h6 class="my-1 font-weight-bold">Modalidades</h6>
    @foreach ($modals as $modal)
    <li class="list-group-item "> 
      <div class="d-flex flex-row  align-items-center">
        <div>
          {{$modal['work_modality']}}
        </div>
        <div>
          <form action="/admin/config/trabalho/{{ $modal['id']}}" method="post">
            @csrf
            <input hidden value="{{ $modal }}" >
            <button class="btn btn-sm btn-primary ml-2 " type="submit" >
              <span class="material-icons text-white"> delete </span>
            </button>
          </form>
        </div>
      </div>
      
    </li>
          
      @endforeach
  
    </div>
    <!-- fim lista de modalidades -->

    <!-- início div config -->
    <div class="col-md-9 my-1">

      <!-- início do form de modalidades -->
      <form method="POST">
        @csrf
        <!-- início da div form-row -->
        <div class="form-row">

          <div class="font-weight-bold form-group col-md-12">
            <label for="work_modality">Identificação</label>
            <input type="text" class="form-control" id="work_modality" placeholder="Escolha um nome"
              name="work_modality" value="{{ old('work_modality') }}">
              @error('work_modality')
              <div class="text-danger font-weight-normal">{{ $message }}</div>
              @enderror
          </div>

          <div class="form-group col-md-5">
            <label for="work_start_date">Início das inscrições</label>
            <input type="date" class="form-control" id="work_start_date" placeholder="dd/mm/aaaa"
              name="work_start_date" value="{{ old('work_start_date') }}">
              @error('work_start_date')
              <div class="text-danger">{{ $message }}</div>
              @enderror
          </div>

          <div class="form-group col-md-5">
            <label for="work_end_date">Fim das inscrições</label>
            <input type="date" class="form-control" id="work_end_date" placeholder="dd/mm/aaaa"
              name="work_end_date" value="{{ old('work_end_date') }}">
              @error('work_end_date')
              <div class="text-danger">{{ $message }}</div>
              @enderror
          </div>

          <div for="coauthor_quantity" class="form-group col-md-2" data-toggle="tooltip" data-placement="right"
            title="Sem limite? Deixe em branco">
            <label>Coautores</label>
            <select type="number" class="form-control" id="coauthor_quantity" name="coauthor_quantity">
              <option selected disabled> Escolher</option>
              <option value="">nenhum</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select> 
            @error('coauthor_quantity')
            <div class="text-danger">{{ $message }}</div>
            @enderror
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
                name="abstract_title_min_char" value="{{ old('abstract_title_min_char') }}">
                @error('abstract_title_min_char')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6">
              <label for="abstract_title_max_char">Máximo de caracteres</label>
              <input class="form-control" type="number" id="abstract_title_max_char" placeholder="inserir número"
                name="abstract_title_max_char" value="{{ old('abstract_title_max_char') }}">
                @error('abstract_title_max_char')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
          </div>


          <div class="form-group form-row col-md-6">

            <h6 class="col-md-12">Configurar resumo</h6>
            <div class="col-md-6">
              <label for="abstract_min_char">Mínimo de caracteres</label>
              <input class="form-control" type="number" id="abstract_min_char" placeholder="inserir número"
                name="abstract_min_char" value="{{ old('abstract_min_char') }}">
                @error('abstract_min_char')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div div class="col-md-6">
              <label for="abstract_max_char">Máximo de caracteres</label>
              <input class="form-control" type="number" id="abstract_max_char" placeholder="inserir número"
                name="abstract_max_char" value="{{ old('abstract_max_char') }}">
                @error('abstract_max_char')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

          </div>

        </div>
        <!-- Fim da div dos Parâmetros do trabalho -->
        <div class="form-row">
          <div class="col-md-12">
            <label for="author_instructions">Texto de instrução aos autores</label>
            <textarea class="form-control" id="author_instructions" rows="3" name="author_instructions"></textarea>
            @error('author_instructions')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>

          <div class="col-md-12">
            <button class="mt-3 btn btn-primary" type="submit" style="width:120px">OK</button>
          </div>
        </div>

      </form>
      <!-- fim do form de modalidades -->
    </div>
    <!-- fim div config -->

  </div>
  <!-- fim div row -->

</div>
<!-- fim div container -->

@endsection