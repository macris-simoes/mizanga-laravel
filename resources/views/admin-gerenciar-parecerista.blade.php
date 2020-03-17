<!DOCTYPE html>
<html lang="pt-br">
@include('includes.head')

<body>

    <div class="container">

        <div class="mb-1 pt-1">
            <h1 class="display-3">Gerenciar Parecerista</h1>
            <p class="lead font-italic"></p>
        </div>

        <div class="my-5">
            <div class="row justify-content-around">
                <div class="col-md-4">
                    <button type="button" class="btn btn-success btn-block mb-2">INLCUIR PARECERISTA</button>
                </div>
                <div class="col-md-4">
                    <button type="button" class="btn btn-success btn-block mb-2">GERAR DADOS DE ACESSO PARA GRUPO</button>
                </div>
            </div>
            <div class="row justify-content-around">
                <div class="col-md-4">
                    <button type="button" class="btn btn-success btn-block mb-2">ENVIAR CARTAS CONVITE</button>
                </div>
                <div class="col-md-4">
                    <button type="button" class="btn btn-success btn-block mb-2">ENVIAR MENSAGEM PARA GRUPO</button>
                </div>
            </div>
            <div class="row justify-content-around">
                <div class="col-md-4">
                    <button type="button" class="btn btn-success btn-block mb-2">ENVIAR DADOS DE ACESSO</button>
                </div>
                <div class="col-md-4">
                    <button type="button" class="btn btn-success btn-block mb-2">EDITAR INSTRUÇÕES PARA AVALIAÇÃO</button>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-light text-center">
                    <tr>
                        <th scope="col" style="width: 15%">CPF</th>
                        <th scope="col" style="width: 20%">Nome</th>
                        <th scope="col" style="width: 15%">Eixos</th>
                        <th scope="col" style="width: 15%">Carta enviada</th>
                        <th scope="col">Avaliações</th>
                        <th scope="col">Confirmar/Desconfirmar</th>
                        <th scope="col" style="width: 15%">Editar/Excluir/Substituir</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>XXX.XXX.XXX-XX</td>
                        <td>Maria José da Silva</td>
                        <td>Eixo 01- Lorem Ipsum Dolor</td>
                        <td>Sim</td>
                        <td>10/12</td>
                        <td class="text-center">
                            <a href="">
                                <i class="mr-2 material-icons">check</i>
                            </a>
                            <a href="">
                                <i class="ml-2 material-icons">close</i>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="">
                                <i class="mr-2 material-icons">edit</i>
                            </a>
                            <a href="">
                                <i class="ml-2 material-icons">delete</i>
                            </a>
                            <a href="">
                                <i class="ml-2 material-icons">people</i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

  
</body>

</html>