{{-- -------------------------------------------------------------------------------------- --}}

{{-- definição da pill com active --}}

<?php $congresso = $inscrito = $trabalho = $parecerista = ""; 

if(Request::path() === 'admin-config-congresso' || Request::path() === 'admin-config-eixos' || Request::path() === 'admin-config-inscrito' || Request::path() === 'admin-config-trabalho' || Request::path() === 'admin-config-parecerista'){
    $congresso = "active";
}elseif (Request::path() === 'admin-inscrito' || Request::path() === 'admin-inscrito-visualizar' || Request::path() === 'admin-inscrito-visualizar-detalhe' ){ 
    $inscrito = "active";
}elseif(Request::path() === 'admin-trabalho' || Request::path() === 'admin-trabalho-visualizar'){
    $trabalho = "active";
}elseif(Request::path() === 'admin-parecerista' || Request::path() === 'admin-parecerista-visualizar' || Request::path() === 'admin-parecerista-visualizar-detalhe' || Request::path() === 'admin-parecerista-substituir'){
    $parecerista = "active";
} ?>
{{-- fim pill active --}}

<div class="container">
    <!-- Início do menu das pills -->
    <nav>
        <div class="nav nav-pills" id="nav-tab" role="tablist">
            <a class="{{Request::path() === 'admin-home' ? 'active' : '' }} nav-item nav-link" href="/admin-home">Início</a>
            <a class="<?php echo ("$congresso") ?> nav-item nav-link font-weight-bolder" href="admin-config-congresso">Congresso</a>
            <a class="<?php echo ("$inscrito") ?> nav-item nav-link " href="admin-inscrito">Inscritos</a>
            <a class="<?php echo ("$trabalho") ?> nav-item nav-link" href="admin-trabalho">Trabalhos</a>
            <a class="<?php echo ("$parecerista") ?> nav-item nav-link" href="admin-parecerista">Pareceristas</a>
        </div>
    </nav>
    <!-- fim do menu das pills -->
    <!-- fim da div container -->
</div>
{{-- fim da pills do ADMIN --}}

{{-- ---------------------------------------------------------------------------- --}}

<?php 


if (Request::path() === 'admin-config-congresso' || Request::path() === 'admin-config-eixos' || Request::path() === 'admin-config-inscrito' || Request::path() === 'admin-config-trabalho' || Request::path() === 'admin-config-parecerista'){ ?>
{{-- início da tabs do ADMIN CONFIG CONGRESSO --}}
<div class="container">
    
    <ul class="nav nav-tabs my-3" id="pills-tab" role="tablist">
        <li class="nav-item"> <a class="nav-link {{Request::path() === 'admin-config-congresso' ? 'active' : '' }}" href="/admin-config-congresso">Configurar congresso</a></li>
        <li class="nav-item"> <a class="nav-link {{Request::path() === 'admin-config-eixos' ? 'active' : '' }}" href="/admin-config-eixos">Inserir Eixos</a></li>
        <li class="nav-item"> <a class="nav-link {{Request::path() === 'admin-config-inscrito' ? 'active' : '' }}" href="/admin-config-inscrito">Configurar modalidades de inscrição</a></li>
        <li class="nav-item"> <a class="nav-link {{Request::path() === 'admin-config-trabalho' ? 'active' : '' }}" href="/admin-config-trabalho">Configurar trabalhos</a></li>
        <li class="nav-item"> <a class="nav-link {{Request::path() === 'admin-config-parecerista' ? 'active' : '' }}" href="/admin-config-parecerista">Incluir pareceristas</a></li>
    </ul>
    
</div>
{{-- fim da tabs do ADMIN CONFIG CONGRESSO --}}
<?php } ?>