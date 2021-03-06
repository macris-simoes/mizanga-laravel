@extends('template')

@section('content')

    <div class="container">
        <ul class="nav nav-tabs my-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link " href="/inscrito">Informações</a>
            </li>
            @if(date('Y-m-d') > $end_date->event_end_date)
            <li class="nav-item">
                <a class="nav-link " href="/inscrito/certificados">Certificados </a>
            </li>
            @endif
            <li class="nav-item">
                <a class="nav-link active" href="/inscrito/trabalho/enviar">Enviar trabalho</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="/inscrito/trabalho/cadastrados">Trabalhos cadastrados</a>
            </li>
        </ul>
    </div>
    <!-- início envio de trabalho -->
    <div class="container shadow pb-3">
        @if(session('mensagem'))
            <div class="alert alert-success container">{{session('mensagem')}}</div>
        @endif
        <div class="mb-1 pt-1 pb-2">
            <h4 class="display-3">Enviar novo trabalho</h4>
            <p class="lead font-italic"></p>
        </div>
        <form method="post">
            @csrf

            <div class="form-row">
                <div class="form-group col-md-12 pb-2">
                    <label for="">Modalidade*</label>
                    <select class="form-control" name="category">
                        <option selected disabled>Selecione a modalidade</option>
                        @foreach ($modals as $modal)
                            <option value="{{ $modal->work_modality }}">{{ $modal->work_modality }}</option>
                        @endforeach
                        
                    </select>
                    @error('category')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                </div>
            </div>

            <div class="form-row">

                <div class="form-group col-md-12">
                    <label for="">Eixo temático*</label>
                    <select class="form-group form-control" name="axis_id">
                        <option selected disabled>Selecione o eixo temático</option>
                        @foreach ($eixos as $eixo)
                    <option value="{{$eixo->id}}">{{ $eixo->axis }}</option>
                        @endforeach
                    </select>
                    @error('axis_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                </div>

            </div>

            <div class="form-row">
                <div class="form-group col-12">
                    <label for="abstract_title">Título*</label>
                    <input type="text" class="form-control" id="abstract_title" name="abstract_title" placeholder="Insira um título com, no máximo, 80 caracteres com espaço">
                    @error('abstract_title')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-12 row-5">
                    <label for="abstract_body">Resumo*</label>
                    <textarea class="form-control" id="abstract_body" rows="10" name="abstract_body"></textarea>
                    <small class="form-text text-muted">O resumo deverá conter no mínimo 800 e no máximo 1200 caracteres com espaço.</small>
                    @error('abstract_body')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <!-- aqui tem que por o php conforme a config no admin -->
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="first_keyword">Palavra-chave 1*</label>
                    <input type="text" class="form-control" id="first_keyword" placeholder="Insira uma palavra-chave" name="first_keyword">
                    @error('first_keyword')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="second_keyword">Palavra-chave 2*</label>
                    <input type="text" class="form-control" id="second_keyword" placeholder="Insira uma palavra-chave" name="second_keyword">
                    @error('second_keyword')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="third_keyword">Palavra-chave 3*</label>
                    <input type="text" class="form-control" id="third_keyword" placeholder="Insira uma palavra-chave" name="third_keyword">
                    @error('third_keyword')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="author">Autor*</label>
                    <input type="text" name="author" id="author" class="form-control">
                    @error('author')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <label for="author_affiliation">Filiação Institucional*</label>
                    <input type="text" name="author_affiliation" id="author_affiliation" class="form-control">
                    @error('author_affiliation')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="accordion mb-2" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Adicionar co-autores
                        </button>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">

                        
                        <div class="form-row d-flex">
                            <div class="form-group col-md-6">
                                <label for="first_coauthor">Co-autor 1</label>
                                <input type="text" name="first_coauthor" id="first_coauthor" class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="first_coauthor_afiliation">Filiação Institucional</label>
                                <input type="text" name="first_coauthor_afiliation" id="first_coauthor_afiliation" class="form-control">
                            </div>
                        </div>

                        <div class="form-row d-flex">
                            <div class="form-group col-md-6">
                                <label for="second_coauthor">Co-autor 2</label>
                                <input type="text" name="second_coauthor" id="second_coauthor" class="form-control">
                            </div>
            
                            <div class="form-group col-md-6">
                                <label for="second_coauthor_afiliation">Filiação Institucional</label>
                                <input type="text" name="second_coauthor_afiliation" id="second_coauthor_afiliation" class="form-control">
                            </div>
                        </div>
                        <div class="form-row d-flex">
                            <div class="form-group col-md-6">
                                <label for="third_coauthor">Co-autor 3</label>
                                <input type="text" name="third_coauthor" id="third_coauthor" class="form-control">
                            </div>
            
                            <div class="form-group col-md-6">
                                <label for="third_coauthor_afiliation">Filiação Institucional</label>
                                <input type="text" name="third_coauthor_afiliation" id="third_coauthor_afiliation" class="form-control">
                            </div>
                        </div>
                        <div class="form-row d-flex">
                            <div class="form-group col-md-6">
                                <label for="fourth_coauthor">Co-autor 4</label>
                                <input type="text" name="fourth_coauthor" id="fourth_coauthor" class="form-control">
                            </div>
            
                            <div class="form-group col-md-6">
                                <label for="fourth_coauthor_afiliation">Filiação Institucional</label>
                                <input type="text" name="fourth_coauthor_afiliation" id="fourth_coauthor_afiliation" class="form-control">
                            </div>
                        </div>
                        <div class="form-row d-flex">
                            <div class="form-group col-md-6">
                                <label for="fifth_coauthor">Co-autor 5</label>
                                <input type="text" name="fifth_coauthor" id="fifth_coauthor" class="form-control">
                            </div>
            
                            <div class="form-group col-md-6">
                                <label for="fifth_coauthor_afiliation">Filiação Institucional</label>
                                <input type="text" name="fifth_coauthor_afiliation" id="fifth_coauthor_afiliation" class="form-control">
                            </div>
                        </div>
                        <div class="form-row d-flex">
                            <div class="form-group col-md-6">
                                <label for="sixth_coauthor">Co-autor 6</label>
                                <input type="text" name="sixth_coauthor" id="sixth_coauthor" class="form-control">
                            </div>
            
                            <div class="form-group col-md-6">
                                <label for="sixth_coauthor_afiliation">Filiação Institucional</label>
                                <input type="text" name="sixth_coauthor_afiliation" id="sixth_coauthor_afiliation" class="form-control">
                            </div>
                        </div>
                        <div class="form-row d-flex">
                            <div class="form-group col-md-6">
                                <label for="seventh_coauthor">Co-autor 7</label>
                                <input type="text" name="seventh_coauthor" id="seventh_coauthor" class="form-control">
                            </div>
            
                            <div class="form-group col-md-6">
                                <label for="seventh_coauthor_afiliation">Filiação Institucional</label>
                                <input type="text" name="seventh_coauthor_afiliation" id="seventh_coauthor_afiliation" class="form-control">
                            </div>
                        </div>
                        <div class="form-row d-flex">
                            <div class="form-group col-md-6">
                                <label for="eighth_coauthor">Co-autor 8</label>
                                <input type="text" name="eighth_coauthor" id="eighth_coauthor" class="form-control">
                            </div>
            
                            <div class="form-group col-md-6">
                                <label for="eighth_coauthor_afiliation">Filiação Institucional</label>
                                <input type="text" name="eighth_coauthor_afiliation" id="eighth_coauthor_afiliation" class="form-control">
                            </div>
                        </div>
                        <div class="form-row d-flex">
                            <div class="form-group col-md-6">
                                <label for="nineth_coauthor">Co-autor 9</label>
                                <input type="text" name="nineth_coauthor" id="nineth_coauthor" class="form-control">
                            </div>
            
                            <div class="form-group col-md-6">
                                <label for="nineth_coauthor_afiliation">Filiação Institucional</label>
                                <input type="text" name="nineth_coauthor_afiliation" id="nineth_coauthor_afiliation" class="form-control">
                            </div>
                        </div>
                        <div class="form-row d-flex">
                            <div class="form-group col-md-6">
                                <label for="tenth_coauthor">Co-autor 10</label>
                                <input type="text" name="tenth_coauthor" id="tenth_coauthor" class="form-control">
                            </div>
            
                            <div class="form-group col-md-6">
                                <label for="tenth_coauthor_afiliation">Filiação Institucional</label>
                                <input type="text" name="tenth_coauthor_afiliation" id="tenth_coauthor_afiliation" class="form-control">
                            </div>
                        </div>


                    </div>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-12">
                    <label for="financial_support">Financiamento</label>
                    <input type="text" class="form-control" id="financial_support" placeholder="Se houver, identifique a agência financiadora ou fonte de financiamento" name="financial_support">
                </div>
            </div>

            <div class="my-4">
                <button type="submit" class="btn btn-primary" style="width:120px">Enviar</button>
                <a href="/inscrito" class="btn btn-primary" style="width:120px">Voltar</a>
            </div>

        </form>


    </div>

@endsection