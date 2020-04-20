@extends('template')

@section('content')

    <div class="container">
        <div class="mb-1 pt-1">
            <h4 class="display-3">Contato</h4>
            <p class="lead font-italic"></p>
        </div>
        <div class="col-md-6 offset-md-3">
            <form class="card card-sm mb-4">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name_contact">Nome*</label>
                        <input class="form-control" type="text" id="name_contact" name="name_contact" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="email_contact">E-mail*</label>
                        <input type="email" class="form-control" id="email_contact" aria-describedby="emailHelp" name="email_contact">
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="subject_contact">Assunto*</label>
                        <select class="form-control" id="subject_contact" name="subject_contact">
                            <option>Inscrição</option>
                            <option>Editar dados pessoais</option>
                            <option>Dúvidas sobre trabalhos</option>
                            <option>Outros</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message_contact">Mensagem*</label>
                        <textarea class="form-control" id="message_contact" rows="3" name="message_contact"></textarea>
                    </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
@endsection