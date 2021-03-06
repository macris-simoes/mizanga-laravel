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

        .mizanga{
            font-family: 'Amaranth', sans-serif;
        }

    </style>
    <title>Mizanga Pro</title>
</head>

<body>
    <div class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-white container-flex">
        <div class="container">    
                <a class="navbar-brand mr-auto" href="/home">
                    <h2 class="mizanga text-primary"> Mizanga</h2>
                </a>
                @if(!Auth::check())
                <a class="btn btn-primary rounded-right d-lg-none d-xl-none mr-1" href="/login">LOGIN</a>
                @else
                <a class="btn btn-primary rounded-right d-lg-none d-xl-none mr-1" href="/logout">LOGOUT</a>
                @endif

                @if(Auth::check())
                <div class="dropdown d-lg-none d-xl-none mr-1">
                    <!-- parte de fora -->
                    <button type="button" class="btn dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" data-offset="10,20">
                        <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}&bold=true" class="rounded-circle"
                            height="45px">
                    </button>
                    <!-- parte de dentro (dropdown) -->
                    <div class="dropdown-menu  dropdown-menu-right" class="card" aria-labelledby="dropdownMenuOffset">
                        <div>
                            <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}&bold=true"
                                 height="45px" class="mx-auto d-block rounded-circle" alt="...">
                                <div class="card-body ">
                                    <h5 class="card-title text-center">Seus Dados</h5>
                                    <p class="text-center m-0 mt-2">{{Auth::user()->name}}</p>
                                    <p class="text-center m-0 mt-2">{{Auth::user()->email}}</p>
                                    
                                </div>
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
                            @if(Auth::user()->type == "100" || Auth::user()->type == "101" || Auth::user()->type == "110" || Auth::user()->type == "111")
                            <li class="nav-item">
                                <a class="nav-link" href="/admin"> Área do admin </a>
                            </li>
                            @endif

                            @if(Auth::user()->type == "001" || Auth::user()->type == "011" || Auth::user()->type == "101" || Auth::user()->type == "111")
                            <li class="nav-item">
                                <a class="nav-link" href="/inscrito"> Área do inscrito </a>
                            </li>
                            @endif

                            @if(Auth::user()->type == "010" || Auth::user()->type == "110" || Auth::user()->type == "011" || Auth::user()->type == "111")
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
                    @else
                    <a class="btn btn-primary nav-link rounded-right d-none d-lg-block d-xl-block" href="/logout">LOGOUT</a>
                    @endif
                </div>
                @if (Auth::check())
                <div class="dropdown d-none d-lg-block d-xl-block">
                    <!-- parte de fora -->
                    <button type="button" class="btn dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" data-offset="10,20">
                        <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}&bold=true" class="rounded-circle" height="45px">
                    </button>
                    <!-- parte de dentro (dropdown) -->
                    <div class="dropdown-menu  dropdown-menu-right" class="card" aria-labelledby="dropdownMenuOffset">
                        <div>
                            <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}&bold=true"
                                height="45px" class="mx-auto d-block rounded-circle" alt="...">
                                <div class="card-body ">
                                    <h5 class="card-title text-center">Seus Dados</h5>
                                    <p class="text-center m-0 mt-2">{{Auth::user()->name}}</p>
                                    <p class="text-center m-0 mt-2">{{Auth::user()->email}}</p>
                                    
                                </div>
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
            <div class="col-md-3 col-lg-3 mt-3" >
                <h6 class="text-uppercase mb-2 font-weight-bold text-white"> Links</h6>
                <hr class="bg-warning mb-4 mt-0 d-inline-block mx-auto" style="width: 40px;">
                <p> 
                    <a href="/inscricao-usuario" class="text-decoration-none text-white">Inscrição</a>
                </p>
                <p> 
                    <a href="" class="text-decoration-none text-white text-left">Sobre o Congresso</a>
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
              <p class="text-center text-md-left text-white"><small>© 2020 Copyright Congresso Mundial das Mizangueiras.
                <a href="#" class="text-decoration-none text-white"> Desenvolvido por Mizanga.</a>
            </small></p>
      
            </div>
            <div class="col-md-5 col-lg-4 ml-lg-0">

                <!-- Social buttons -->
                <div class="text-center text-md-right">
                  <ul class="list-unstyled list-inline">
                    <li class="list-inline-item">
                      <a class="btn-floating btn-sm mx-1" href="#">
                        <img src="{{ asset('img/facebook (1).png') }}" alt="" srcset="">
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a class="btn-floating btn-sm mx-1" href="#">
                        <img src="{{ asset('img/instagram (1).png') }}" alt="" srcset="">
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a class="btn-floating btn-sm mx-1" href="#">
                        <img src="{{ asset('img/twitter.png') }}" alt="" srcset="">
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a class="btn-floating btn-sm mx-1" href="#">
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
    <script src="https://code.jquery.com/jquery-3.5.0.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>

    {{-- Máscara para o CPF e telefones --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    <script src="/js/inscricao-usuario-mascara.js"></script>
</body>
</html>