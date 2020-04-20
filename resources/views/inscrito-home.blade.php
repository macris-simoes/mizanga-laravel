@extends('template')

@section('content')

    <div class="container">
        <ul class="nav nav-tabs my-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active " href="/inscrito">Informações</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="/inscrito/certificados">Certificados</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/inscrito/trabalho/enviar">Enviar trabalho</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="/inscrito/trabalho/cadastrados">Trabalhos cadastrados</a>
            </li>
        </ul>
    </div>
    
    <div class="container shadow">
        <div class="mb-1 pt-1">
            <h4 class="display-3">Informações pessoais</h4>
            <p class="lead font-italic"></p>
        </div>

        

        <div class="my-3">
            <h5>Dados da inscrição</h5>
            @if($reg)
            <p>Código da Inscrição: {{ $reg['id']}} <br>
                Modalidade: {{ $reg['register_modality']}} <br>
                Data de inscrição: {{ $reg['created_at']}} <br>
                Pedido XXXXXX - R$200,00</p>
        </div>
        <hr>
        <div class="my-3">
            <h5>Dados pessoais</h5>
            <div class="row">
            <p class="col-7">Nome: {{ $reg['name']}} </p>
            @endif
            <p class="col-5">Data de nascimento: {{ $reg['birth_date']}} </p>  
            </div>
            <div class="row">
            <p class="col-7">CPF: {{ $reg['cpf']}}</p>
            <p class="col-5">RG: {{ $reg['rg']}}</p>  
            </div>
            <div class="row">
            <p class="col-7">Nome social: {{ $reg['social_name']}}</p>
            <p class="col-5">Instituição para crachá: {{ $reg['institution']}} </p>  
            </div>
        </div>

        <span>*Caso precise editar os seus dados pessoais entre em contato <a href="/contato">aqui</a>.</span>
        <hr>

        <div class="my-3">
            <h5>Dados de contato</h5>
            <div class="row">
                <p class="col-4">Telefone residencial: {{ $reg['home_phone']}}</p>
                <p class="col-4">Telefone profissional: {{ $reg['work_phone']}}</p>
                <p class="col-4">Telefone celular: {{ $reg['mobile_phone']}}</p>
            
            </div>
            <div class="row">
                <p class="col-4">E-mail: {{ $reg['email']}}</p>   
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
                <p class="col-4"> {{ $reg['profession']}} </p>
                <p class="col-4"> {{ $reg['filiation']}} </p>  
                <p class="col-4"> {{ $reg['job_title']}} </p>  
            </div>
            <div>
                <p> Áreas de atuação (informe as áreas de atuação separadas por ponto e vírgula)</p>
                <p> {{ $reg['expertise']}} </p>
            </div>
        </div>
        <hr>

        <div class="my-3">
            <h5>Endereço</h5>
            <div class="row">
                <p class="col-6">País: {{ $reg['country']}} </p>
                <p class="col-6">UF: {{ $reg['uf']}} </p>
            </div>

        </div>
        <hr>

        <div class="my-3">
            <h5>Dados complementares</h5>
            <div class="row">
                <p class="col-4">Gênero: {{ $reg['gender']}}</p>
                <p class="col-4">Raça/Cor: {{ $reg['color']}}</p>  
                <p class="col-4">Prefere usar nome social?: {{ $reg['use_social_name']}}</p>  
            </div>
        </div>
        <hr>
        

    </div>

    <script>
        let btnEditar = document.querySelector('.btnEditar')
        let editarDados = document.querySelector(".editar")

    function editar() {
        editarDados.innerHTML = `
    <form method="POST">
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
