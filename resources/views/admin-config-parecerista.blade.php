<!DOCTYPE html>
<html lang="pt-br">
@include('includes.head')

<body>
    
    <div class="container">
        <div class="mb-1 pt-1">
            <h1 class="display-3">Incluir Parecerista</h1>
            <p class="lead font-italic"></p>
        </div>

        <form action="" method="post">
            @csrf
            <div class="my-3">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="cpf">CPF*</label>
                        <input type="text" class="form-control" id="cpf" placeholder="CPF" name="appraiser_cpf">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="nome">Nome*</label>
                        <input type="text" class="form-control" id="nome" placeholder="Nome" name="appraiser_name">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="email">E-mail*</label>
                        <input type="text" class="form-control" id="email" placeholder="E-mail" name="appraiser_email">
                    </div>
                </div>
            </div>

            <div class="my-3">
                <h5>Eixos temáticos</h5>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        Eixo 01 - Lorem ipsum dolor sit amet consectetur
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="eixoUmSim" value="true" name="axis_01">
                        <label class="form-check-label" for="eixoUmSim">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="eixoUmNao" value="false" name="axis_01">
                        <label class="form-check-label" for="eixoUmNao">Não</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        Eixo 02 - Lorem ipsum dolor sit amet consectetur
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="eixoDoisSim" value="true" name="axis_02">
                        <label class="form-check-label" for="eixoDoisSim">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="eixoDoisNao" value="false" name="axis_02">
                        <label class="form-check-label" for="eixoDoisNao">Não</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        Eixo 03 - Lorem ipsum dolor sit amet consectetur
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="eixoTresSim" value="true" name="axis_03">
                        <label class="form-check-label" for="eixoTresSim">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="eixoTresNao" value="false" name="axis_03">
                        <label class="form-check-label" for="eixoTresNao">Não</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        Eixo 04 - Lorem ipsum dolor sit amet consectetur
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="eixoQuatroSim" value="true" name="axis_04">
                        <label class="form-check-label" for="eixoQuatroSim">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="eixoQuatroNao" value="false" name="axis_04">
                        <label class="form-check-label" for="eixoQuatroNao">Não</label>
                    </div>
                </div>
            </div>

            <div class="my-3">
                <h5>Após salvar:</h5>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="opcao1" value="true" name="acceptance_letter">
                    <label class="form-check-label" for="opcao1">
                        Enviar carta convite
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="opcao2" value="false" name="acceptance_letter">
                    <label class="form-check-label" for="opcao2">
                        Cadastrar novo
                    </label>
                </div>
            </div>
        </form>

        <div class="my-4">
            <button type="submit" class="btn btn-primary" style="width:120px">Enviar</button>
            <a href="/admin" class="btn btn-primary" style="width:120px">Voltar</a>
        </div>
    </div>



</body>

</html>