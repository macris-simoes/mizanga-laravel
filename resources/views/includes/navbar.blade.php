<nav class="navbar navbar-expand-lg navbar-light bg-white container">
  <a class="navbar-brand mr-auto" href="/home">
    <h2 class="text-primary"> Mizanga</h2>
  </a>
  <a class="btn btn-primary rounded-right d-lg-none d-xl-none mr-1" href="/login"  style="font-family: Segoe UI, Roboto;">LOGIN</a> 
  <div class="dropdown d-lg-none d-xl-none mr-1">
    <!-- parte de fora -->
    <button type="button" class="btn dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
      <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}" width="40px" height="40px">
    </button>
    <!-- parte de dentro (dropdown) -->
    <div class="dropdown-menu  dropdown-menu-right" class="card" aria-labelledby="dropdownMenuOffset">
      <div>
        <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}" height="45px" class="card-img-center rounded-circle" alt="...">
        <div class="card-body ">
          <h5 class="card-title">Seus Dados</h5>
          <p class="card-text">Nome Sobrenome</p>
        </div>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="/inscrito">Editar dados</a>
      </div>
    </div>
  </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
    <button type="button" class="btn dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
      <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}" class="rounded-circle" height="45px">
    </button>
    <!-- parte de dentro (dropdown) -->
    <div class="dropdown-menu  dropdown-menu-right" class="card" aria-labelledby="dropdownMenuOffset">
      <div>
        <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}" height="45px" class="card-img-center rounded-circle" alt="...">
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