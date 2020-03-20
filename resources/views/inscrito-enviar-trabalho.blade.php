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
                    <select class="form-control" name="category">
                        <option selected disabled>Selecione a modalidade</option>
                        <option value="1">Pôster</option>
                        <!-- aqui vai ter que por php -->
                    </select>
                </div>
            </div>

            <div class="form-row">

                <div class="form-group col-md-6 pb-2">
                    <select class="form-group form-control" name="first_topic">
                        <option selected disabled>Primeira opção de eixo temático</option>
                        <option value="1">Eixo 1. lorem ipsum</option>
                        <option value="1">Eixo 2. lorem ipsum</option>
                        <option value="1">Eixo 3. lorem ipsum</option>
                        <option value="1">Eixo 4. lorem ipsum</option>
                        <!-- aqui vai ter que por php -->
                    </select>
                </div>

                <div class="form-group col-md-6 pb-2">
                    <select class="form-group form-control" name="second_topic">
                        <option selected disabled>Segunda opção de eixo temático</option>
                        <option value="1">Eixo 1. lorem ipsum</option>
                        <option value="1">Eixo 2. lorem ipsum</option>
                        <option value="1">Eixo 3. lorem ipsum</option>
                        <option value="1">Eixo 4. lorem ipsum</option>
                        <!-- aqui vai ter que por php -->
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-12">
                    <label for="abstract_title">Título</label>
                    <input type="text" class="form-control" id="abstract_title" name="abstract_title" placeholder="Insira um título com, no máximo, 80 caracteres com espaço">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-12 row-5">
                    <label for="abstract_body">Resumo</label>
                    <textarea class="form-control" id="abstract_body" rows="10" name="abstract_body"></textarea>
                    <small class="form-text text-muted">O resumo deverá conter no mínimo 800 e no máximo 1200 caracteres com espaço.</small>
                    <!-- aqui tem que por o php conforme a config no admin -->
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-4">
                    <label for="first_keyword">Palavra-chave 1</label>
                    <input type="text" class="form-control" id="first_keyword" placeholder="Insira uma palavra-chave" name="first_keyword">
                </div>
                <div class="form-group col-4">
                    <label for="second_keyword">Palavra-chave 2</label>
                    <input type="text" class="form-control" id="second_keyword" placeholder="Insira uma palavra-chave" name="second_keyword">
                </div>
                <div class="form-group col-4">
                    <label for="third_keyword">Palavra-chave 3</label>
                    <input type="text" class="form-control" id="third_keyword" placeholder="Insira uma palavra-chave" name="third_keyword">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-6">
                    <label for="author">Autor</label>
                    <input type="text" name="author" id="author" class="form-control">
                </div>

                <div class="form-group col-6">
                    <label for="author_place_of_work">Filiação Institucional</label>
                    <input type="text" name="author_place_of_work" id="author_place_of_work" class="form-control">
                </div>
            </div>
            
            <div class="form-row d-flex">
                <div class="form-group col-6">
                    <label for="first_coauthor">Co-autor 1</label>
                    <input type="text" name="first_coauthor" id="first_coauthor" class="form-control">
                </div>

                <div class="form-group col-5">
                    <label for="first_coauthor_place_of_work">Filiação Institucional</label>
                    <input type="text" name="first_coauthor_place_of_work" id="first_coauthor_place_of_work" class="form-control">
                </div>
                <div class="form-group d-flex align-items-end col-1">
                    <button class="btn btn-outline-primary ml-auto">Excluir</button>
                </div>
            </div>
            
            <button class="btn btn-outline-primary mb-2">Adicionar co-autor</button>

            <div class="form-row">
                <div class="form-group col-12">
                    <label for="financial_support">Financiamento</label>
                    <input type="text" class="form-control" id="financial_support" placeholder="Se houver, identifique a agência financiadora ou fonte de financiamento" name="financial_support">
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