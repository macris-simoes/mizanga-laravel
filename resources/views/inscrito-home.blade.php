@extends('template')

@section('content')

    <div class="container">
        <ul class="nav nav-tabs my-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active " href="/inscrito-home">Informações</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="/inscrito-certificados">Certificados</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/inscrito-enviar-trabalho">Enviar trabalho</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="/inscrito-trabalhos-cadastrados">Trabalhos cadastrados</a>
            </li>
        </ul>
    </div>
    
    <div class="container">
        <div class="mb-1 pt-1">
            <h4 class="display-3">Informações pessoais</h4>
            <p class="lead font-italic"></p>
        </div>

        

        <div class="my-3">
            <h5>Dados da inscrição</h5>
            <p>Código da Inscrição: XXXXXX <br>
                Modalidade: Estudante não associado <br>
                Data de inscrição: 20/11/2019 - 10:20 <br>
                Pedido XXXXXX - R$200,00</p>
        </div>
        <hr>

        <div class="my-3">
            <h5>Dados pessoais</h5>
            <div class="row">
            <p class="col-7">Nome: </p>
            <p class="col-5">Data de nascimento: </p>  
            </div>
            <div class="row">
            <p class="col-7">CPF: </p>
            <p class="col-5">RG: </p>  
            </div>
            <div class="row">
            <p class="col-7">Nome social: </p>
            <p class="col-5">Instituição para crachá: </p>  
            </div>
        </div>

        <span>*Caso precise editar os seus dados pessoais entre em contato <a href="/contato">aqui</a>.</span>
        <hr>

        <div class="my-3">
            <h5>Dados de contato</h5>
            <div class="row">
                <p class="col-4">Telefone residencial: (11) 5555-8978</p>
                <p class="col-4">Telefone profissional: (11) 5555-8978</p>
                <p class="col-4">Telefone celular: (11) 99999-8978</p>
            
            </div>
            <div class="row">
                <p class="col-4">E-mail: email@email.com.br</p>
                <p class="col-4">Confirmação do e-mail: email@email.com.br</p>    
            </div>
            <div class="editar">

            </div>
            <div class="row">
                <div class="col-12">
                    <button class="mt-3 btn btn-primary btnEditar" style="width:120px" onclick="editar()">Editar</button>
                </div>
            </div>
        </div>
        <hr>

        <div class="my-3">
            <h5>Atuação profissional</h5>

            <div class="row">
                <p class="col-4">Situação profissional: </p>
                <p class="col-4">Filiação institucional: </p>  
                <p class="col-4">Função institucional/Cargo: </p>  
            </div>
            <div class="row">
                <p class="col-4">...................</p>
                <p class="col-4">...................</p>  
                <p class="col-4">...................</p>  
            </div>
            <div>
                <p> Áreas de atuação (informe as áreas de atuação separadas por ponto e vírgula)</p>
                <p>...........................</p>
            </div>
        </div>
        <hr>

        <div class="my-3">
            <h5>Endereço</h5>
            <div class="row">
                <p class="col-6">País: </p>
                <p class="col-6">UF: </p>
            </div>

        </div>
        <hr>

        <div class="my-3">
            <h5>Dados complementares</h5>
            <div class="row">
                <p class="col-4">Gênero:</p>
                <p class="col-4">Raça/Cor:</p>  
                <p class="col-4">Prefere usar nome social?:</p>  
            </div>
        </div>
        <hr>
        

    </div>

    <script>
        let btnEditar = document.querySelector('.btnEditar')
        let editarDados = document.querySelector(".editar")

    function editar() {
        editarDados.innerHTML = `
    <form action="" method="POST">
        <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="telResid">Telefone residencial</label>
                    <input type="text" class="form-control phone_with_ddd" id="telResid" name="home_phone" placeholder="Ex.: (00)0000-0000">
                </div>
                <div class="form-group col-md-4">
                    <label for="telProfis">Telefone profissional</label>
                    <input type="text" class="form-control phone_with_ddd" id="telProfis" name="work_phone" placeholder="Ex.: (00)0000-0000">
                </div>
                <div class="form-group col-md-4">
                    <label for="telCelular">Telefone celular</label>
                    <input type="text" class="form-control mobile_with_ddd" id="telCelular" name="mobile_phone" placeholder="Ex.: (00)00000-0000">
                </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">E-mail*</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="E-mail">
            </div>
            <div class="form-group col-md-6">
                <label for="confirmEmail">Confirmar e-mail*</label>
                <input type="text" class="form-control" id="confirmEmail" placeholder="Confirmar e-mail">
            </div>
        </div>
        <div class="form-row">
                <div class="col-12">
                    <button class="mt-3 btn btn-primary" type="submit" style="width:120px">Enviar </button>
                </div>
            </div>
    </form>
        `
        btnEditar.style.display = 'none'
    }        
    </script>
@endsection
