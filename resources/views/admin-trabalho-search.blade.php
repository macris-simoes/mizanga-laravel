<p class=""> Resultado da busca <b> {{$query ?? ''}} </b>: </p>
<div class="bg-light d-flex justify-content-start">

    <div class="list-group m-3 w-100 ">
        @forelse($details as $trabalho)
        <a href="/admin/trabalho/visualizar/{{$trabalho->id}}" class="list-group-item list-group-item-action">
            <div class="d-flex flex-row justify-content-between">
                <h5 class="mb-1">{{$trabalho->abstract_title}}</h5>
                <small>há 15 dia(s)</small>
            </div>
            <div class="">

                <small class="col-md-10">{{$trabalho->category}} || {{$trabalho->author}}</small>

                {{-- <div class="d-flex justify-content-end">
                    <span class="badge badge-warning badge-pill">A</span>
                    <span class="badge badge-light badge-pill">...</span>
                    <span class="badge badge-dark badge-pill">X</span>
                </div> --}}
            </div>
        </a>
        @empty
        <div class="m-3">
            <h5 class="display-6">Sua busca não retornou resultados</h5>
        </div>
        @endforelse
    </div>
</div>
<small>
    fim da busca
</small>