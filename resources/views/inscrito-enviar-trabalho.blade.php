<!DOCTYPE html>
<html lang="pt-br">
    @include('includes.head')

<body>
    
    <!-- início envio de trabalho -->
    <div class="container">

        <div class="mb-1 pt-1 pb-2">
            <h4 class="display-3">Inserir novo trabalho</h4>
            <p class="lead font-italic"></p>
        </div>

        <form action="">

            <div class="form-row">
                <div class="form-group col-md-12 pb-2">
                    <select class="form-control">
                        <option selected disabled>Selecione a modalidade</option>
                        <option value="1">Pôster</option>
                        <!-- aqui vai ter que por php -->
                    </select>
                </div>

                <div class="form-group col-md-6 pb-2">
                    <select class="form-group form-control">
                        <option selected disabled>Primeira opção de eixo temático</option>
                        <option value="1">Eixo 1. lorem ipsum</option>
                        <option value="1">Eixo 2. lorem ipsum</option>
                        <option value="1">Eixo 3. lorem ipsum</option>
                        <option value="1">Eixo 4. lorem ipsum</option>
                        <!-- aqui vai ter que por php -->
                    </select>
                </div>

                <div class="form-group col-md-6 pb-2">
                    <select class="form-group form-control">
                        <option selected disabled>Segunda opção de eixo temático</option>
                        <option value="1">Eixo 1. lorem ipsum</option>
                        <option value="1">Eixo 2. lorem ipsum</option>
                        <option value="1">Eixo 3. lorem ipsum</option>
                        <option value="1">Eixo 4. lorem ipsum</option>
                        <!-- aqui vai ter que por php -->
                    </select>
                </div>

                <div class="form-group col-12">
                    <label for="exampleFormControlInput1">Título</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Insira um título com, no máximo, 80 caracteres com espaço">
                </div>

                <div class="form-group col-12 row-5">
                    <label for="exampleFormControlTextarea1">Resumo</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                    <small class="form-text text-muted">O resumo deverá conter no mínimo 800 e no máximo 1200 caracteres com espaço.</small>
                    <!-- aqui tem que por o php conforme a config no admin -->
                </div>

                <div class="form-group col-4">
                    <label for="exampleFormControlInput1">Palavra-chave 1</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Insira uma palavra-chave">
                </div>
                <div class="form-group col-4">
                    <label for="exampleFormControlInput1">Palavra-chave 2</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Insira uma palavra-chave">
                </div>
                <div class="form-group col-4">
                    <label for="exampleFormControlInput1">Palavra-chave 3</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Insira uma palavra-chave">
                </div>

                <div class="form-group col-12">
                    <label for="exampleFormControlInput1">Financiamento</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Se houver, identifique a agência financiadora ou fonte de financiamento">
                </div>

            </div>

        </form>

        <div class="my-4">
            <button type="submit" class="btn btn-primary" style="width:120px">Enviar</button>
            <a href="/inscrito" class="btn btn-primary" style="width:120px">Voltar</a>
        </div>

    </div>

</body>

</html>