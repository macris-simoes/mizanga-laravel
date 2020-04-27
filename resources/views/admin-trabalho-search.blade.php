@if (isset($query))

<p class="p-3"> Resultado da busca <b> {{$query}} </b>: </p>
<div class="bg-light d-flex justify-content-center">

    <div class="list-group col-md-10 my-3">
        @foreach($details as $trabalho)
        <a href="/admin/trabalho/visualizar/{{$trabalho->id}}" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{$trabalho->abstract_title}}</h5>
                <small>há 15 dia(s)</small>
            </div>
            <div class="d-flex flex-row align-items-start">

                <small class="col-md-10">{{$trabalho->category}} || {{$trabalho->author}}</small>

                <div class="d-flex w-100 justify-content-end">
                    <span class="badge badge-warning badge-pill">A</span>
                    {{-- <span class="badge badge-light badge-pill">...</span>
                    <span class="badge badge-dark badge-pill">X</span> --}}
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>



@elseif(empty($query))

<div class="container my-5">

    <div class="container mt-3 col-md-10 shadow">

        <div class="col-lg-9 m-5">
            <h1 class="display-6">Sua busca não retornou resultados</h1>
            <p> Não encontrado </p>
            <a href="/admin/trabalho">Voltar para a busca</a>
        </div>


    </div>
@endif