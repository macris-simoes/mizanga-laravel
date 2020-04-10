@extends('template')

@section('content')

{{-- início da pills do ADMIN --}}
<!-- início div container -->
<div class="container">
    <!-- Início do menu das tabs -->
    <nav>
        <div class="nav nav-pills" id="nav-tab" role="tablist">
            <a class="nav-item nav-link" href="/admin-home">Início</a>
            <a class="nav-item nav-link font-weight-bolder" href="/admin-config-congresso">Congresso</a>
            <a class="nav-item nav-link" href="/admin-inscrito">Inscritos</a>
            <a class="nav-item nav-link active" href="/admin-trabalho">Trabalhos</a>
            <a class="nav-item nav-link" href="/admin-parecerista">Pareceristas</a>
        </div>
    </nav>
    <!-- fim do menu das tabs -->
    <!-- fim da div container -->
</div>
{{-- fim da pills do ADMIN --}}

    em breve
@endsection