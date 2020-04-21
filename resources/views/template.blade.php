<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/style.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Amaranth&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="{{ URL::asset('/img/favicon2.png') }}" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   
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
    <title>Mizanga Beta</title>
</head>

<body>
    <div class="sticky-top">
        <div>    
            <nav class="navbar navbar-expand-lg navbar-light bg-white container">
                <a class="navbar-brand mr-auto" href="/home">
                    <h2 class="text-primary"> Mizanga</h2>
                </a>
                @if(!Auth::check())
                <a class="btn btn-primary rounded-right d-lg-none d-xl-none mr-1" href="/login"
                    style="font-family: Segoe UI, Roboto;">LOGIN</a>
                @endif

                @if(Auth::check())
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
                @endif

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                
                <div class="collapse navbar-collapse ml-3" id="navbarNav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/home">Início</a>
                        </li>

                        @if(!Auth::check())
                        <li class="nav-item">
                            <a class="nav-link" href="/instrucoes-inscricao"> Faça sua inscrição</a>
                        </li>
                        @endif
                        @if (Auth::check())
                            @if(Auth::user()->type == "admin")
                            <li class="nav-item">
                                <a class="nav-link" href="/admin"> Área do admin </a>
                            </li>
                            @endif

                            @if(Auth::user()->type == "inscrito")
                            <li class="nav-item">
                                <a class="nav-link" href="/inscrito"> Área do inscrito </a>
                            </li>
                            @endif

                            @if(Auth::user()->type == "parecerista")
                            <li class="nav-item">
                                <a class="nav-link" href="/parecerista"> Área do parecerista </a>
                            </li>
                            @endif
                        @endif

                        <li class="nav-item">
                            <a class="nav-link" href="/contato">Contato</a>
                        </li>
                    </ul>
                    @if (!Auth::check())
                    <a class="btn btn-primary nav-link rounded-right d-none d-lg-block d-xl-block" href="/login">LOGIN</a>
                    @endif
                </div>
                @if (Auth::check())
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
                                width="70px" height="70px" class="mx-auto d-block" alt="...">
        
                                <p class="text-center m-0 mt-2">{{Auth::user()->name}}</p>
                        </div>
                    </div>
                </div>
                @endif
            </nav>
        </div>
    </div>

    @yield('content')

        <!-- Footer -->
<footer class="footer bg-primary pt-4">
    
    <div class="container mt-3 pb-3 text-center text-md-left">
        <div class="row mt-3 pb-3 text-md-left">
            <div class="col-md-2 col-lg-2 mt-3" >
                <h6 class="text-uppercase mb-2 font-weight-bold text-white"> O CONGRESSO</h6>
                <hr class="bg-warning mb-4 mt-0 d-inline-block mx-auto" style="width: 110px;">
                <p class="text-white"> O MAIOR congresso de Pscicologia do Brasil, organizado por estudantes da Digital House.
                </p>
                
            </div>
            <div class="col-md-3 col-lg-3 mx-auto mt-3 text-md-left text-center">
                <h6 class="text-uppercase mb-2 font-weight-bold text-white">Apoiadores</h6>
                <hr class="bg-warning mb-4 mt-0 d-inline-block mx-auto" style="width: 100px;">
                <div class="sponsor">
                <img src="{{ asset('img/logopscmed.png') }}" alt="" srcset="" class="apoiadores">
                <img src="{{ asset('img/lablogo.png') }}" alt="" srcset="" class="apoiadores">
                <img src="{{ asset('img/logobean (1).png') }}" alt="" srcset="" class="apoiadores"> 
                <img src="{{ asset('img/crossmindlogo.png') }}" alt="" srcset="" class="apoiadores"> 
                </div>
            </div>
            <div class="col-md-2 col-lg-2 mt-3" >
                <h6 class="text-uppercase mb-2 font-weight-bold text-white"> Links</h6>
                <hr class="bg-warning mb-4 mt-0 d-inline-block mx-auto" style="width: 40px;">
                <p> 
                    <a href="/inscricao-usuario" class="text-decoration-none text-white">Inscrição</a>
                </p>
                <p> 
                    <a href="#" class="text-decoration-none text-white text-left">Sobre o Congresso</a>
                </p>
                <p> 
                    <a href="/login" class="text-decoration-none text-white text-left">Login</a>
                </p>
                <p> 
                    <a href="/contato" class="text-decoration-none text-white">Contato</a>
                </p>
                <p> 
                    <a href="#"></a>
                </p>
            </div>
            <div class="col-md-3 col-lg-3 mt-3 text-center text-md-left ">
                <h6 class="text-uppercase mb-2 font-weight-bold text-white"> Como chegar</h6>
                <hr class="bg-warning mb-4 mt-0 d-inline-block mx-auto" style="width: 120px;">
                <div class="d-block">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.5103780930226!2d-46.68562155018018!3d-23.58602218459539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce57425081498f%3A0xab7ec25488d224a0!2sFaria%20Lima%20Financial%20Center!5e0!3m2!1spt-PT!2sbr!4v1586795298528!5m2!1spt-PT!2sbr" width="200" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
           

        </div>
        <hr>
        <div class="row d-flex align-items-center">
            <div class="col-md-7 col-lg-8">
      
              <!--Copyright-->
              <p class="text-center text-md-left text-white"><small>© 2020 Copyright Congresso XXXXXX.
                <a href="#" class="text-decoration-none text-white"> Desenvolvido por Mizanga.</a>
            </small></p>
      
            </div>
            <div class="col-md-5 col-lg-4 ml-lg-0">

                <!-- Social buttons -->
                <div class="text-center text-md-right">
                  <ul class="list-unstyled list-inline">
                    <li class="list-inline-item">
                      <a class="btn-floating btn-sm mx-1">
                        <img src="{{ asset('img/facebook (1).png') }}" alt="" srcset="">
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a class="btn-floating btn-sm mx-1">
                        <img src="{{ asset('img/instagram (1).png') }}" alt="" srcset="">
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a class="btn-floating btn-sm mx-1">
                        <img src="{{ asset('img/twitter.png') }}" alt="" srcset="">
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a class="btn-floating btn-sm mx-1">
                        <img src="{{ asset('img/whatsapp (3).png') }}" alt="" srcset="">
                      </a>
                    </li>
                  </ul>
                </div>
        
            </div>
              <!-- Grid column -->
        
    </div>
</footer>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    {{-- Máscara para o CPF e telefones --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    <script src="/js/inscricao-usuario-mascara.js"></script>
    
</body>

</html>