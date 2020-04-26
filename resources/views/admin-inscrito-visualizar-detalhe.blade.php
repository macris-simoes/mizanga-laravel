@extends('template')
@section('content')
  
  {{-- ---------------------------------------------------------------------------- --}}

  <div class="container mt-3 col-md-10 shadow bg-light">
    <div class="card m-3 border-0">
        <div class="card-body">
            <div class="container d-flex flex-row justify-content-between">
                <div>
                    <h5 class="card-title">{{$inscrito->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$inscrito->register_modality}}</h6>
                </div>
                    <a href="/admin-inscrito"> <span class="material-icons"> close </span> </a>
            </div>
            <div>
            {{-- início da tabs do ADMIN READ INSCRITO --}}

            <div>
                <ul class="nav nav-tabs my-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link " href="/admin-inscrito-visualizar/{{$user_id}}">Detalhes da inscrição</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active " href="/admin-inscrito-visualizar-detalhe/{{$user_id}}">Trabalhos inscritos</a>
                    </li>
                </ul>
            </div>
            {{-- fim da tabs do ADMIN READ INSCRITO --}}

{{-- ------------------------------------------------------------------------------ --}}
            @if(isset($trabalhos))
            {{-- div lista de trabalhos --}}
            <div class="list-group-flush">
                @foreach($trabalhos as $trabalho)
                
                <div class="d-flex flex-column list-group-item">
                    <div class="d-flex flex-row align-items-start ">
                        <div class="d-flex flex-column">
                            <p class="font-weight-bold">{{$trabalho->abstract_title}}</p>
                            <div class="d-flex flex-column">
                                <small>Eixo temático: {{$trabalho->axis}}</small>
                                            <small>Parecer:
                                            @if(($trabalho->rate_work)=='')    
                                            Sim
                                            @else
                                            Não
                                            @endif
                                            </small>
                                            
                            </div>
                            <hr>
                            <p>{{$trabalho->abstract_body}}</p>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-end">
                        <button class="btn btn-warning">
                            Deletar trabalho
                        </button>
                    </div>
                </div>
                @endforeach
                
                {{-- fim div lista de trabalhos (abaixo)--}}
            </div>
            {{ $trabalhos->links() }}  
            @else
                <p class="font-italic">Não há trabalhos cadastrados</p>
            @endif
            {{-- fim card-body (abaixo) --}}
        </div>
        {{-- fim da div card (abaixo) --}}
    </div>

{{-- fim div container do background( abaixo) --}}
</div>

@endsection