
<p class=""> Resultado da busca <b> {{$query ?? ''}} </b>: </p>
<div class="bg-light d-flex justify-content-start">

    <div class="list-group m-3 w-100">
        @forelse($details as $parecTrabalho)
        <a href="/admin/parecerista/visualizar/{{$parecTrabalho->user_id}}" class="list-group-item list-group-item-action">
            <div class="d-flex flex-column align-items-start">
                <h5 class="mb-1">{{$parecTrabalho->appraiser_name}}</h5>
                <small>Parecerista || {{$parecTrabalho->appraiser_email}}</small>
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