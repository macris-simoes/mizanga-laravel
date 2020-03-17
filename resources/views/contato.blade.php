<!DOCTYPE html>
<html lang="pt-BR">

    @include('includes.head')
<body>

    <div class="sticky-top">
        @include('includes.navbar')
    </div>

    <div class="container">
        <div class="mb-1 pt-1">
            <h4 class="display-3">Contato</h4>
            <p class="lead font-italic"></p>
        </div>
        <div class="col-6 offset-3">
            <form class="card card-sm mb-4">
                <div class="card-body">
                    <div class="form-group">
                        <label for="inlineFormInputName">Nome</label>
                        <input class="form-control" type="text" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">E-mail</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Assunto</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Inscrição</option>
                            <option>Dúvidas sobre trabalhos</option>
                            <option>Outros</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Mensagem</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
    <div>
        @include('includes.footer')
        @include('includes.script')
    </div>
</body>
</html>