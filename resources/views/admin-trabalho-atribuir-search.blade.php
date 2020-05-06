<p class=""> Resultado da busca <b> {{$query ?? ''}} </b>: </p>
<div class="bg-light d-flex justify-content-start">

    <div class="list-group m-3 w-100 ">
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
        <div class="m-3">
            <h5 class="display-6">Sua busca não retornou resultados</h5>
        </div>
        @endforelse
    </div>
</div>
<small>
    fim da busca
</small>