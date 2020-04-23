@extends('template')
@section('content')
@include('admin-congresso-pills')

  
  {{-- ---------------------------------------------------------------------------- --}}

  <div class="container mt-3 col-md-10 shadow">
    <div class="card m-3 border-0">
        <div class="card-body">
            <a href="/admin-inscrito" class="mt-5"> Voltar </a>
            <h5 class="card-title">{{$inscrito->name}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$inscrito->register_modality}}</h6>

            {{-- início da tabs do ADMIN READ INSCRITO --}}

            <div>
                <ul class="nav nav-tabs my-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link " href="/admin-inscrito-showa">Detalhes da inscrição</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active " href="/admin-inscrito-showb">Trabalhos inscritos</a>
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
                            <p>{{$trabalho->abstract_body}}</p>

                            <small>Eixo temático: {{$trabalho->axis}}</small>
                            <small>Parecer:
                            @if(!is_null($trabalho->rate_work))    
                            Sim
                            @else
                            Não
                            @endif
                            </small>
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