<p class=""> Resultado da busca <b> {{$query ?? ''}} </b>: </p>
<div class="bg-light d-flex justify-content-start">

    <div class="list-group m-3 w-100">
        @forelse($details as $inscrito)

            <a href="/admin/inscrito/visualizar/{{$inscrito->user_id}}" class="list-group-item list-group-item-action">
                <h5 class="mb-1">{{$inscrito->name}}</h5>
                <small class="col-md-10">{{$inscrito->register_modality}} || {{$inscrito->email}}</small>
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