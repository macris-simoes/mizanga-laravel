<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/style.min.css">
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
    </style>
    <title>Mizanga Beta</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white container">
        <a class="navbar-brand mr-auto" href="/home">
            <h2 class="text-primary"> Mizanga</h2>
        </a>
        <a class="btn btn-primary rounded-right d-lg-none d-xl-none mr-1" href="/login"
            style="font-family: Segoe UI, Roboto;">LOGIN</a>
        <div class="dropdown d-lg-none d-xl-none mr-1">
            <!-- parte de fora -->
            <button type="button" class="btn dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" data-offset="10,20">
                <img src="https://www.searchpng.com/wp-content/uploads/2019/02/Deafult-Profile-Pitcher.png" width="40px"
                    height="40px">
            </button>
            <!-- parte de dentro (dropdown) -->
            <div class="dropdown-menu  dropdown-menu-right" class="card" aria-labelledby="dropdownMenuOffset">
                <div>
                    <img src="https://www.searchpng.com/wp-content/uploads/2019/02/Deafult-Profile-Pitcher.png"
                        width="70px" height="70px" class="card-img-center" alt="...">
                    <div class="card-body ">
                        <h5 class="card-title">Seus Dados</h5>
                        <p class="card-text">Nome Sobrenome</p>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/inscrito">Editar dados</a>
                </div>
            </div>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        
        <div class="collapse navbar-collapse ml-3" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/home">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/instrucoes-inscricao"> Faça sua inscrição</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin"> Área do admin </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/inscrito"> Área do inscrito </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/parecerista"> Área do parecerista </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contato">Contato</a>
                </li>
            </ul>
            <a class="btn btn-primary nav-link rounded-right d-none d-lg-block d-xl-block" href="/login">LOGIN</a>
        </div>
        <div class="dropdown d-none d-lg-block d-xl-block">
            <!-- parte de fora -->
            <button type="button" class="btn dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" data-offset="10,20">
                <img src="https://www.searchpng.com/wp-content/uploads/2019/02/Deafult-Profile-Pitcher.png" width="40px"
                    height="40px">
            </button>
            <!-- parte de dentro (dropdown) -->
            <div class="dropdown-menu  dropdown-menu-right" class="card" aria-labelledby="dropdownMenuOffset">
                <div>
                    <img src="https://www.searchpng.com/wp-content/uploads/2019/02/Deafult-Profile-Pitcher.png"
                        width="70px" height="70px" class="card-img-center" alt="...">
                    <div class="card-body ">
                        <h5 class="card-title">Seus Dados</h5>
                        <p class="card-text">Nome Sobrenome</p>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/inscrito">Editar dados</a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer>
        <div class="p-0 mt-4 bg-primary text-white text-center">
            <p class="mb-0">Mizanga 2020</p>
        </div>
    </footer>


{{-- scripts: isso vai continuar? --}}
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    {{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script> --}}
</body>

</html>