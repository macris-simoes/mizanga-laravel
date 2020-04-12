@extends('template')

@section('content')


{{-- início da pills do ADMIN --}}
<!-- início div container -->
<div class="container">
    <!-- Início do menu das pills -->
    <nav>
        <div class="nav nav-pills" id="nav-tab" role="tablist">
            <a class="nav-item nav-link" href="/admin-home">Início</a>

            <a class="nav-item nav-link font-weight-bolder" href="/admin-config-congresso">Congresso</a>

            <a class="nav-item nav-link active" href="/admin-inscrito">Inscritos</a>

            <a class="nav-item nav-link" href="/admin-trabalho">Trabalhos</a>

            <a class="nav-item nav-link" href="/admin-parecerista">Pareceristas</a>
        </div>
    </nav>
    <!-- fim do menu das pills -->
    <!-- fim da div container -->
</div>
{{-- fim da pills do ADMIN --}}



{{-- ---------------------------div container fundo colorido------------------------------------- --}}
<div class="container mt-3 col-md-10 shadow">
    <div class="card m-3 border-0">
        <div class="card-body">
            <a href="/admin-inscrito">  Voltar </a>
            <h5 class="card-title">Maria Cristina Dancham Simões</h5>
            <h6 class="card-subtitle mb-2 text-muted">Estudante associado (1ª faixa) </h6>


            {{-- início da tabs do ADMIN READ INSCRITO --}}

            <div>
                <ul class="nav nav-tabs my-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin-inscrito-showa">Detalhes da inscrição</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/admin-inscrito-showb">Trabalhos inscritos</a>
                    </li>
                </ul>
            </div>
            {{-- fim da tabs do ADMIN READ INSCRITO --}}

            {{-- INÍCIO DIV DETALHES DA INSCRIÇÃO --}}
            <div class="card-text list-group-item border-0">
                <h6 class="font-weight-bold">Detalhes da inscrição</h6>

                {{-- UPDATE ADMIN-INSCRITO --}}
                <form id="inscricao-usuario" name="inscricao-usuario" method="post">
                    {{-- início modalidade --}}
                    @csrf
                    <div class="my-3">
                        <div class="form-row">
                            {{-- modalidade select popular a partir do que estiver no admin-config-inscritos --}}
                            <div class="form-group col-md-6">
                                <label for="register_modality">Modalidade*</label>
                                <select class="form-control" name="modality" id="register_modality">
                                    <option selected disabled>Escolher</option>
                                    <option>Estudante</option>
                                    <option>Profissional</option>
                                    <option>Outros</option>
                                </select>

                                @error('register_modality')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    {{-- dados pessoais --}}
                    <div class="my-3">
                        <h5>Dados pessoais</h5>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="cpf">CPF*</label>
                                <input type="text" class="form-control cpf" id="cpf" name="cpf"
                                    placeholder="Ex.: 000.000.000-00" value="{{ old('cpf') }}">
                                @error('cpf')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="rg">RG*</label>
                                <input type="text" class="form-control" id="rg" name="rg" placeholder="RG"
                                    value="{{ old('rg') }}">
                                @error('rg')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="emissor">Orgão emissor*</label>
                                <input type="text" class="form-control" id="emissor" name="emissor"
                                    placeholder="Orgão Emissor" value="{{ old('emissor') }}">
                                @error('emissor')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="name">Nome*</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nome"
                                    value="{{ old('name') }}">
                                <small id="passwordHelpBlock" class="form-text text-muted">*Atenção: Confira se
                                    seu
                                    nome foi digitado corretamente!</small>
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="birth_date">Data de nascimento*</label>
                                <input type="date" class="form-control" id="birth_date" name="birth_date"
                                    placeholder="dd/mm/aaaa">
                                @error('birth_date')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="social_name">Nome Social*</label>
                                <input type="text" class="form-control" id="social_name" name="social_name"
                                    placeholder="Nome Social" value="{{ old('social_name') }}">
                                <small id="passwordHelpBlock" class="form-text text-muted">Se desejar, inclua
                                    neste
                                    campo seu nome de uso habitual.</small>
                                @error('social_name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="institution">Instituição para crachá</label>
                                <input type="text" class="form-control" id="institution" name="institution"
                                    placeholder="Instituição para crachá" value="{{ old('institution') }}">
                            </div>
                        </div>
                    </div>
                    {{-- formação --}}
                    <div class="my-3">
                        <h5>Formação</h5>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="education_level">Titulação mais alta*</label>
                                <select class="form-control" name="education_level" id="education_level">
                                    <option selected disabled>Escolha...</option>
                                    <option value="Ensino Medio">Ensino Médio</option>
                                    <option value="Graduacao">Graduação</option>
                                    <option value="Mestrado">Mestrado</option>
                                    <option value="Doutorado">Doutorado</option>
                                    <option value="Pos-Doutorado">Pós-Doutorado</option>
                                </select>
                                @error('education_level')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="grad_school">Instituição de titulação*</label>
                                <input type="text" class="form-control" id="grad_school" name="grad_school"
                                    placeholder="Instituição de titulação" value="{{ old('grad_school') }}">
                                @error('grad_school')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    {{-- atuaççao profissional --}}
                    <div class="my-3">
                        <h5>Atuação Profissional</h5>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="profession">Situação profissional*</label>
                                <input type="text" class="form-control" id="profession" name="profession"
                                    placeholder="Situação profissional" value="{{ old('profession') }}">
                                @error('profession')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="filiation">Filiação institucional</label>
                                <input type="text" class="form-control" id="filiation" name="filiation"
                                    placeholder="Filiação institucional" value="{{ old('filiation') }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="job_title">Função institucional/Cargo</label>
                                <input type="text" class="form-control" id="job_title" name="job_title"
                                    placeholder="Função institucional/cargo" value="{{ old('job_title') }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="expertise">Áreas de atuação (informe as áreas de atuação separadas
                                    por
                                    ponto e vírgula)</label>
                                <input type="text" class="form-control" id="expertise" name="expertise"
                                    placeholder="Áreas de atuação" value="{{ old('expertise') }}">
                            </div>
                        </div>
                    </div>
                    {{-- Endereço --}}
                    <div class="my-3">
                        <h5>Endereço</h5>
                        <div class="form-row">
                            <div class="form-group col-md-2 mb-0">
                                País de residência*
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="location" id="inlineRadio1"
                                    value="brasil">
                                <label class="form-check-label" for="inlineRadio1">Residência no Brasil</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="location" id="inlineRadio2"
                                    value="exterior">
                                <label class="form-check-label" for="inlineRadio2">Residência no
                                    Exterior</label>
                            </div>
                        </div>
                        @error('location')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="city">Município*</label>
                                <input type="text" class="form-control" id="city" name="city" placeholder="Município"
                                    value="{{ old('city') }}">
                                @error('city')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="uf">UF*</label>
                                <select class="form-control" name="uf" id="uf">
                                    <option selected disabled>Escolha...</option>
                                    <option value="1">AC</option>
                                    <option value="2">AL</option>
                                    <option value="3">AP</option>
                                    <option value="4">AM</option>
                                    <option value="5">BA</option>
                                    <option value="6">CE</option>
                                    <option value="7">DF</option>
                                    <option value="8">ES</option>
                                    <option value="9">GO</option>
                                    <option value="10">MA</option>
                                    <option value="11">MG</option>
                                    <option value="12">MT</option>
                                    <option value="13">MS</option>
                                    <option value="14">PA</option>
                                    <option value="15">PB</option>
                                    <option value="16">PR</option>
                                    <option value="17">PE</option>
                                    <option value="18">PI</option>
                                    <option value="19">RJ</option>
                                    <option value="20">RN</option>
                                    <option value="21">RS</option>
                                    <option value="22">RO</option>
                                    <option value="23">RR</option>
                                    <option value="24">SC</option>
                                    <option value="25">SP</option>
                                    <option value="26">SE</option>
                                    <option value="27">TO</option>
                                </select>
                                @error('uf')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="country">País*</label>
                                <input type="text" class="form-control" id="country" name="country" placeholder="País"
                                    value="{{ old('country') }}">
                                @error('country')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    {{-- Dados de contato --}}
                    <div class="my-3">
                        <h5>Dados de contato</h5>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="home_phone">Telefone residencial</label>
                                <input type="text" class="form-control phone_with_ddd" id="home_phone" name="home_phone"
                                    placeholder="Ex.: (00)0000-0000" value="{{ old('home_phone') }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="work_phone">Telefone profissional</label>
                                <input type="text" class="form-control phone_with_ddd" id="work_phone" name="work_phone"
                                    placeholder="Ex.: (00)0000-0000" value="{{ old('work_phone') }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="mobile_phone">Telefone celular</label>
                                <input type="text" class="form-control mobile_with_ddd" id="mobile_phone"
                                    name="mobile_phone" placeholder="Ex.: (00)00000-0000"
                                    value="{{ old('mobile_phone') }}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email">E-mail*</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="E-mail"
                                    value="{{ old('email') }}">
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="confirmEmail">Confirmar e-mail*</label>
                                <input type="text" class="form-control" id="confirmEmail" name="confirmEmail"
                                    placeholder="Confirmar e-mail">
                                @error('confirmEmail')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    {{-- acessibilidade --}}
                    <div class="my-3">
                        <h5>Acessibilidade</h5>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                Necessita de recursos de acessibilidade?*
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="accessibility" id="accessSim"
                                    value="1">
                                <label class="form-check-label" for="accessSim">Sim</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="accessibility" id="accessNao"
                                    value="0">
                                <label class="form-check-label" for="accessNao">Não</label>
                            </div>
                        </div>
                        @error('accessibility')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="accessibility_info">Utilize este espaço para indicar quais recursos
                                    de
                                    acessibilidade você necessita</label>
                                <input type="text" class="form-control" id="accessibility_info"
                                    name="accessibility_info" placeholder="" value="{{ old('accessibility_info') }}">
                            </div>
                        </div>
                    </div>
                    {{-- dados complementares --}}
                    <div class="my-3">
                        <h5>Dados complementares</h5>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="gender">Gênero</label>
                                <input type="text" class="form-control" id="gender" name="gender" placeholder="Gênero"
                                    value="{{ old('gender') }}">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="color">Raça/Cor*</label>
                                <select class="form-control" name="color" id="color">
                                    <option selected disabled>Escolha...</option>
                                    <option value="Amarela">Amarela</option>
                                    <option value="Branca">Branca</option>
                                    <option value="Indigena">Indígena</option>
                                    <option value="Parda">Parda</option>
                                    <option value="Preta">Preta</option>
                                    <option value="Nao declarado">Não desejo declarar</option>
                                </select>
                                @error('color')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-8">
                                <label for="use_social_name">Prefere que o nome social seja utilizado na emissão
                                    do
                                    certificado?*</label>
                                <select class="form-control" name="use_social_name" id="use_social_name">
                                    <option selected disabled>Escolha...</option>
                                    <option value="1">Sim</option>
                                    <option value="0">Não</option>
                                </select>
                                @error('use_social_name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    {{-- buttons --}}
                    <div class="mt-4 mb-1 d-flex flex-row justify-content-between">
                            <input type="submit" class="btn btn-primary" style="width:120px" value="Atualizar">
                        <input type="submit" class="btn btn-warning" value="Apagar registro">
                    </div>
                </form>
                <a href="/admin-inscrito">  Voltar </a>

            </div>
            {{-- FIM DIV DETALHES DA INSCRIÇÃO --}}

        </div>
    </div>

</div>
{{-- ---------------------------div container fundo colorido------------------------------------- --}}

@endsection