{{-- início da tabs do ADMIN CONFIG CONGRESSO --}}

<div class="container">
    <div class="">
        <!-- Início do menu das pills -->
        <nav>
            <div class="nav nav-pills" id="nav-tab" role="tablist">
                <a class=" nav-item nav-link" href="/admin">Início</a>
                <a class="active nav-item nav-link font-weight-bolder" href="/admin/config/congresso">Congresso</a>
                <a class=" nav-item nav-link " href="/admin/inscrito">Inscritos</a>
                <a class="nav-item nav-link" href="/admin/trabalho">Trabalhos</a>
                <a class="nav-item nav-link" href="/admin/parecerista">Pareceristas</a>
            </div>
        </nav>
        <!-- fim do menu das pills -->
        <!-- fim da div container -->
    </div>
    {{-- fim da pills do ADMIN --}}
    <div class="container">

        <ul class="nav nav-tabs mt-3" id="pills-tab" role="tablist">
            <li class="nav-item"> <a class="nav-link {{Request::path() === 'admin/config/congresso' ? 'active' : '' }}"
                    href="/admin/config/congresso">Configurar congresso</a></li>
            <li class="nav-item"> <a class="nav-link {{Request::path() === 'admin/config/eixos' ? 'active' : '' }}"
                    href="/admin/config/eixos">Inserir Eixos</a></li>
            <li class="nav-item"> <a class="nav-link {{Request::path() === 'admin/config/inscrito' ? 'active' : '' }}"
                    href="/admin/config/inscrito">Configurar modalidades de inscrição</a></li>
            <li class="nav-item"> <a class="nav-link {{Request::path() === 'admin/config/trabalho' ? 'active' : '' }}"
                    href="/admin/config/trabalho">Configurar trabalhos</a></li>
            <li class="nav-item"> <a
                    class="nav-link {{Request::path() === 'admin/config/parecerista' ? 'active' : '' }}"
                    href="/admin/config/parecerista">Incluir pareceristas</a></li>
        </ul>
    </div>

</div>