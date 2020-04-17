@extends('template')
@section('content')
@include('admin-congresso-pills')

<!-- início div container -->
<div class="container shadow mb-3 pb-4">
  
  <!-- início Cabeçalho1 -->
  <div>
    <h1 class="display-3">Inscritos</h1>
    <p class="lead font-italic"> Gerenciar modalidades de inscrição</p>
  </div>
  <!-- fim Cabeçalho1 -->
  
  <!-- início div row -->
  <div class= "row ">
    
    <!-- Início lista de modalidades -->
    <div class=" list-group-flush col-md-3 my-1 border-right">
      <h6 class="my-1 font-weight-bold">Modalidades</h6>
      @foreach ($modals as $modal)
      <li class="list-group-item"> <a href="#">{{$modal['register_modality']}}</a></li>
      @endforeach
    </div>
    <!-- fim lista de modalidades -->
    
    <!-- início div config -->    
    <div class="col-md-9 my-1">
      <!-- início do form de modalidades -->
      <form method="post" name="admin-config-incrito">
        @csrf
        
        <!-- início da div form-row -->
        <div class="form-row">
          <!-- identificação -->
              <div class="col-md-12 mb-4">
                <label class="font-weight-bold" for="modality">Identificação</label>
                <input type="text" class="form-control" id="modality" placeholder="Escolha um nome" name="register_modality">
                @error('register_modality')
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>

            <!-- Prazo de início -->
              <div class="col-md-4">
                <label class="font-weight-bold" for="register_start_date">Início das inscrições</label>
                <input type="date" class="form-control" id="register_start_date" placeholder="dd/mm/aaaa" name="register_start_date">
                @error('register_start_date')
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              
              <!-- Prazo de término -->
              <div class="col-md-4">
                <label class="font-weight-bold" for="register_end_date">Fim das inscrições</label>
                <input type="date" class="form-control" id="register_end_date" placeholder="dd/mm/aaaa" name="register_end_date">
                @error('register_end_date')
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="col-md-4">
                <label class="font-weight-bold" for="register_fee">Taxa de inscrição</label>
                <input type="number" class="form-control" id="register_fee" name="register_fee" step="0.01">
                @error('register_fee')
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <!-- Anexar comprovante? -->
              <div class="col-md-12 mt-3 ">
                <label class="font-weight-bold">Anexar comprovante?</label>
                <div class="form-check custom-control custom-radio">
                <input type="radio" id="attach_receipt_yes" name="attach_receipt" class="custom-control-input" value="1">
                <label class="custom-control-label" for="attach_receipt_yes">Sim</label>
              </div>
              <div class=" form-check custom-control custom-radio">
                <input type="radio" id="attach_receipt_no" name="attach_receipt" class="custom-control-input" value="0">
                <label class="custom-control-label" for="attach_receipt_no">Não</label>
              </div>
              @error('attach_receipt')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            
            <!-- botão -->
            <div class=" mt-4 col-md-12">
              <button class="btn btn-primary" type="submit" style="width:120px">OK</button>
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

@endsection