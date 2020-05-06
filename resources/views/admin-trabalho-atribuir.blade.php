@extends('template')
@section('content')
@include('includes/admin-congresso-pills')

{{-- --------------------------------------------------------------------------------------------- --}}

<!-- Início lista cRud index trabalho -->
<div class="container mt-3 col-md-10 shadow">

    @if(session('message'))
    <div class="alert alert-success container">{{session('message')}}</div>
    @endif


    {{-- início do campo de busca --}}
    <div class="row my-3">
        <div class="col-lg-9 my-1">
            <h1 class="display-4">Atribuir Pareceristas</h1>
            <small>Clique sobre a lista de pareceristas para atribuir o trabalho</small>
        </div>
    </div>

    <form action="/admin/trabalho/atribuir" method="POST">
        @csrf
        <div class="input-group  mb-3">
            <input type="text" class="form-control" placeholder="Insira uma palavra ou trecho" aria-label="Buscar nome"
                aria-describedby="button-addon2" name="q">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit" id="button-addon2">Buscar</button>
            </div>
        </div>
    </form>

    @if (isset($details))
    @include('admin-trabalho-atribuir-search')
    @endif

    <hr>

    {{-- fim do campo de busca --}}


    {{-- início dos cards de resultado da busca --}}
    @if(isset($trabalhos))
    <div class="list-group my-3">

        @forelse($details as $trabalho)
        <div class="d-flex flex-row list-group-item">

            <a href="/admin/trabalho/visualizar/{{$trabalho->id}}" class=" list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{$trabalho->abstract_title}}</h5>
                </div>
                <div class="d-flex flex-row align-items-start">
                    <small class="col-md-10">{{$trabalho->category}} || {{$trabalho->author}}</small>
                </div>
            </a>
            <div class="">
                <label for="para">Enviar para</label>
                <select name="atribuicao" id="para" class="form-control">
                    <option selected disabled>Escolha...</option>
                    <option value="Fulano">Fulano</option>
                    <option value="Beltrano">Beltrano</option>
                    <option value="Ciclano">Ciclano</option>
                    <option value="Lucas Silva e Silva">Lucas Silva e Silva</option>
                    <option value="Dino da Silva Sauro">Dino da Silva Sauro</option>
                    <option value="Admina">Admina</option>
                </select>
            </div>
        </div>

        @empty
        <p class="font-italic">Não há trabalhos submetidos</p>
        @endforelse
        {{ $trabalhos->links()}}

    </div>
    @endif
    {{-- fim dos cards de resultado da busca --}}
    <!-- fim lista de lista de eixos -->
</div>


@endsection