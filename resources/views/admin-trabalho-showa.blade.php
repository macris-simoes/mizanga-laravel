@extends('template')

@section('content')


{{-- início da pills do ADMIN --}}
<!-- início div container -->
<div class="container">
    <!-- Início do menu das pills -->
    <nav>
        <div class="nav nav-pills" id="nav-tab" role="tablist">
            <a class="nav-item nav-link" href="/admin-home">Início</a>

            <a class="nav-item nav-link font-weight-bolder" href="/admin-config-congresso">Congresso</a>

            <a class="nav-item nav-link " href="/admin-inscrito">Inscritos</a>

            <a class="nav-item nav-link active" href="/admin-trabalho">Trabalhos</a>

            <a class="nav-item nav-link" href="/admin-parecerista">Pareceristas</a>
        </div>
    </nav>
    <!-- fim do menu das pills -->
    <!-- fim da div container -->
</div>
{{-- fim da pills do ADMIN --}}



{{-- ---------------------------div container fundo colorido------------------------------------- --}}
<div class="container mt-3 col-md-10 shadow">
    <div class="card m-3 border-0">
        <div class="card-body">
            <a href="/admin-inscrito" class="mt-5">  Voltar </a>

            <h5 class="card-title">Maria Cristina Dancham Simões</h5>
            <h6 class="card-subtitle mb-2 text-muted">Estudante associado (1ª faixa) </h6>


            {{-- início da tabs do ADMIN READ Trabalhos --}}

            <div>
                <ul class="nav nav-tabs my-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin-trabalho-showa">Detalhes do Trabalho</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link " href="/admin-trabalho-showb"></a>
                    </li> --}}
                </ul>
            </div>
            {{-- fim da tabs do ADMIN READ Trabalho --}}

            {{-- INÍCIO DIV Detalhes do Trabalho --}}
            <div class="card-text list-group-item border-0">
                
           {{-- div lista de trabalhos --}}
           <div class="list-group-flush">
            <h6 class="font-weight-bold list-group-item">Trabalhos inscritos</h6>

            <div class="d-flex flex-column list-group-item">
                <div class="d-flex flex-row align-items-start ">
                    <div class="d-flex flex-column">
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione facere, tempora nulla harum asperiores minima a eveniet aspernatur rem, odio doloremque corrupti vitae aliquam aut voluptas at? Quis, unde temporibus.
                        Reiciendis eveniet impedit consectetur in neque, fugit rem pariatur tenetur quod corrupti consequatur laudantium dolor quis totam aut, recusandae voluptate saepe nisi? Adipisci architecto neque voluptatem deleniti facere, assumenda ratione.
                        Iste aut excepturi cumque mollitia officiis, quidem odit nihil, ex sapiente nemo illo? Sit doloremque laboriosam corrupti dignissimos repellendus blanditiis quibusdam, omnis neque mollitia quo minima, incidunt impedit eos labore!
                        Adipisci blanditiis numquam id ducimus facere deserunt maiores. Eaque odit hic aliquid veniam culpa nulla. Ab maxime recusandae animi aliquam, ad, atque ea alias aut, veniam totam ipsa ducimus unde.
                        Sed enim iure similique in amet quis consequatur pariatur, possimus fugit quam perferendis praesentium delectus, nostrum culpa molestias minima. Nulla consequatur vitae perferendis sed suscipit. Blanditiis rerum quasi quo illo.
                        Quaerat harum consectetur voluptates possimus sit eius soluta placeat, quibusdam dignissimos dolorum. Soluta minima facere deserunt necessitatibus tenetur hic culpa asperiores odio rem quo odit aliquid, sequi esse maxime molestiae!</p>

                        <small>Parecerista: Fulana da Silva</small>
                        <small>Parecer: Aprovado </small>
                    </div>
                </div>
            </div>


            {{-- fim div lista de trabalhos (abaixo)--}}
        </div>
                
                    {{-- buttons --}}
                    <div class="my-4 d-flex flex-row justify-content-between">
                        <a href="/admin-inscrito">  Voltar </a>
                        <input type="submit" class="btn btn-warning" value="Apagar trabalho">
                    </div>
                

            </div>
            {{-- FIM DIV Detalhes do Trabalho --}}

        </div>
    </div>

</div>
{{-- ---------------------------div container fundo colorido------------------------------------- --}}

@endsection