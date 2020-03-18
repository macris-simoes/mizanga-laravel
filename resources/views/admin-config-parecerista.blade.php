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
            <div class="my-3">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="cpf">CPF*</label>
                        <input type="text" class="form-control" id="cpf" placeholder="cpf">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="nome">Nome*</label>
                        <input type="text" class="form-control" id="nome" placeholder="Nome">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="email">E-mail*</label>
                        <input type="text" class="form-control" id="email" placeholder="E-mail">
                    </div>
                </div>
            </div>

            <div class="my-3">
                <h5>Eixos teimáticos</h5>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        Eixo 01 - Lorem ipsum dolor sit amet consectetur
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="eixoUmSim" value="sim">
                        <label class="form-check-label" for="eixoUmSim">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="eixoUmNao" value="nao">
                        <label class="form-check-label" for="eixoUmNao">Não</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        Eixo 02 - Lorem ipsum dolor sit amet consectetur
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="eixoDoisSim" value="sim">
                        <label class="form-check-label" for="eixoDoisSim">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="eixoDoisNao" value="nao">
                        <label class="form-check-label" for="eixoDoisNao">Não</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        Eixo 03 - Lorem ipsum dolor sit amet consectetur
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="eixoTresSim" value="sim">
                        <label class="form-check-label" for="eixoTresSim">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="eixoTresNao" value="nao">
                        <label class="form-check-label" for="eixoTresNao">Não</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        Eixo 04 - Lorem ipsum dolor sit amet consectetur
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="eixoQuatroSim" value="sim">
                        <label class="form-check-label" for="eixoQuatroSim">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="eixoQuatroNao" value="nao">
                        <label class="form-check-label" for="eixoQuatroNao">Não</label>
                    </div>
                </div>
            </div>

            <div class="my-3">
                <h5>Após salvar:</h5>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="opcao1" value="option1">
                    <label class="form-check-label" for="opcao1">
                        Enviar carta convite
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="opcao2" value="option2">
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