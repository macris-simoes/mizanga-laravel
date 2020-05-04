<p class="p-3"> Resultado da busca <b> {{$query ?? ''}} </b>: </p>
<div class="bg-light d-flex justify-content-start">

    <div class="list-group col-md-10 m-2 bg-white">
        @forelse($details as $inscrito)
        <a href="/admin/inscrito/visualizar/{{$inscrito->user_id}}" class="list-group-item list-group-item-action">
            <div class=" d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{$inscrito->name}}</h5>
            </div>
            <div class="d-flex flex-row align-items-start">

                <small class="col-md-10">{{$inscrito->register_modality}} || {{$inscrito->email}}</small>

            </div>
        </a>
        @empty
        <div class=" m-5">
            <h5 class="display-6">Sua busca não retornou resultados</h5>
        </div>
        @endforelse

    </div>
</div>
