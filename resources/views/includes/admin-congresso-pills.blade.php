{{-- -------------------------------------------------------------------------------------- --}}

<div class="container">
    <!-- Início do menu das pills -->
    <nav>
        <div class="nav nav-pills" id="nav-tab" role="tablist">
            <a class="{{Request::path() === 'admin' ? 'active' : '' }} nav-item nav-link" href="/admin">Início</a>
            <a class="{{Request::path() === 'admin-config-congresso' ? 'active' : '' }} nav-item nav-link font-weight-bolder" href="admin-config-congresso">Congresso</a>
            <a class="{{Request::path() === 'admin-inscrito'  ? 'active' : '' }} nav-item nav-link " href="admin-inscrito">Inscritos</a>
            <a class="{{Request::path() === 'admin-trabalho' ? 'active' : '' }} nav-item nav-link" href="admin-trabalho">Trabalhos</a>
            <a class="{{Request::path() === 'admin-parecerista' ? 'active' : '' }} nav-item nav-link" href="admin-parecerista">Pareceristas</a>
        </div>
    </nav>
    <!-- fim do menu das pills -->
    <!-- fim da div container -->
</div>
{{-- fim da pills do ADMIN --}}

{{-- ---------------------------------------------------------------------------- --}}


