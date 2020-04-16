<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/style.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Amaranth&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="{{ URL::asset('/img/favicon2.png') }}" type="image/x-icon" />
   
    <style>
        body {
            margin: 0;
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            display: block;
            flex: 1 0 auto;
        }

        img.apoiadores{
            width: 120px;
            height: 70px;
        }

    </style>

    <title>Mizanga - Cadastro Admin</title>
</head>
<body>
    
    <div class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary container">
            <a class="navbar-brand mr-auto" href="/login">
                <span class="text-white"> Mizanga</span>
            </a>
        </nav>
    </div>
    <div class="container shadow">
        @if(session('mensagem'))
            <div class="alert alert-success container">{{session('mensagem')}}</div>
        @endif
        <div class="my-4 pt-1">
            <h1 class="display-3">Cadastrar Admin</h1>
            <p class="lead font-italic"></p>
        </div>
        
        <div class="my-3 mx-2">
            <form method="post" id="admin-cadastro">
                @csrf
                <div class="my-3">
                    <div class="form-row">
                        <div class="form-group col-lg-4">
                            
                            <label for="cpf">CPF*</label>
                            <input type="text" class="form-control cpf" id="cpf" name="cpf" placeholder="Ex.: 000.000.000-00">
                       
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-lg-4">
                            <label for="nome">Nome*</label>
                            <input type="text" class="form-control" id="nome" placeholder="Nome" name="name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-lg-4">
                            <label for="email">E-mail*</label>
                            <input type="text" class="form-control" id="email" placeholder="E-mail" name="email">
                        </div>
                    </div>
                </div>
                    
                <div class="my-4">
                    <button type="submit" class="btn btn-primary" style="width:120px">Salvar</button>
                    <a href="/home" class="btn btn-primary" style="width:120px">Voltar</a>
                </div>
            </form>
        </div>

    </div>

{{-- Máscara para o CPF --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
<script src="/js/inscricao-usuario-mascara.js"></script>

</body>
</html>


    