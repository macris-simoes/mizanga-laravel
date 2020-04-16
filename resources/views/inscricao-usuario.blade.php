@extends('template')

@section('content')
    <div class="container">        
        @if(session('mensagem'))
            <div class="alert alert-success container">{{session('mensagem')}}</div>
        @endif
        @if(session('erro'))
            <div class="alert alert-danger container">{{session('erro')}}</div>
        @endif
        <div class="mb-1 pt-1">
            <h4 class="display-3">Ficha de Inscrição</h4>
            <p class="lead font-italic"></p>
        </div>
        <form id="inscricao-usuario" name="inscricao-usuario" method="post" enctype="multipart/form-data">
            @csrf
            <div class="my-3">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="register_modality">Modalidade*</label>
                        <select class="form-control" name="register_modality" id="register_modality">
                            <option selected disabled>Escolha...</option>
                            @foreach ($modalidades as $modalidade)                                
                            <option value="{{$modalidade->id}}">{{$modalidade->register_modality}}</option>
                            @endforeach
                        </select>
                        @error('register_modality')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="compMatricula" class="align-self-center mr-2">Comprovante de matrícula</label>
                        <div class="custom-file mb-4">
                            <input type="file" class="custom-file-input" name="file" id="file">
                            <label class="custom-file-label" for="file" data-browse="Buscar"></label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="my-3">
                <h5>Dados pessoais</h5>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="cpf">CPF*</label>
                        <input type="text" class="form-control cpf" id="cpf" name="cpf" placeholder="Ex.: 000.000.000-00" value="{{ old('cpf') }}">
                        @error('cpf')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="rg">RG*</label>
                        <input type="text" class="form-control" id="rg" name="rg" placeholder="RG" value="{{ old('rg') }}">
                        @error('rg')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="emissor">Orgão emissor*</label>
                        <input type="text" class="form-control" id="emissor" name="emissor" placeholder="Orgão Emissor" value="{{ old('emissor') }}">
                        @error('emissor')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="name">Nome*</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nome"  value="{{ old('name') }}">
                        <small id="passwordHelpBlock" class="form-text text-muted">*Atenção: Confira se seu nome foi digitado corretamente!</small>
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="birth_date">Data de nascimento*</label>
                        <input type="date" class="form-control" id="birth_date" name="birth_date" placeholder="dd/mm/aaaa">
                        @error('birth_date')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="social_name">Nome Social*</label>
                        <input type="text" class="form-control" id="social_name" name="social_name" placeholder="Nome Social" value="{{ old('social_name') }}">
                        <small id="passwordHelpBlock" class="form-text text-muted">Se desejar, inclua neste campo seu nome de uso habitual.</small>
                        @error('social_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="institution">Instituição para crachá</label>
                        <input type="text" class="form-control" id="institution" name="institution" placeholder="Instituição para crachá" value="{{ old('institution') }}">
                    </div>
                </div>
            </div>

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
                        <input type="text" class="form-control" id="grad_school" name="grad_school" placeholder="Instituição de titulação"  value="{{ old('grad_school') }}">
                        @error('grad_school')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="my-3">
                <h5>Atuação Profissional</h5>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="profession">Situação profissional*</label>
                        <input type="text" class="form-control" id="profession" name="profession" placeholder="Situação profissional" value="{{ old('profession') }}">
                        @error('profession')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="filiation">Filiação institucional</label>
                        <input type="text" class="form-control" id="filiation" name="filiation" placeholder="Filiação institucional" value="{{ old('filiation') }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="job_title">Função institucional/Cargo</label>
                        <input type="text" class="form-control" id="job_title" name="job_title" placeholder="Função institucional/cargo" value="{{ old('job_title') }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="expertise">Áreas de atuação (informe as áreas de atuação separadas por ponto e vírgula)</label>
                        <input type="text" class="form-control" id="expertise" name="expertise" placeholder="Áreas de atuação" value="{{ old('expertise') }}">
                    </div>
                </div>
            </div>

            <div class="my-3">
                <h5>Endereço</h5>
                <div class="form-row">
                    <div class="form-group col-md-2 mb-0"> 
                        País de residência*
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="location" id="inlineRadio1" value="brasil">
                        <label class="form-check-label" for="inlineRadio1">Residência no Brasil</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="location" id="inlineRadio2" value="exterior">
                        <label class="form-check-label" for="inlineRadio2">Residência no Exterior</label>
                    </div>
                </div>
                @error('location')
                        <div class="text-danger">{{ $message }}</div>
                @enderror
                
                <div class="form-row">                    
                    <div class="form-group col-md-6">
                        <label for="city">Município*</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="Município" value="{{ old('city') }}">
                        @error('city')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="uf">UF*</label>
                        <select class="form-control" name="uf" id="uf">
                            <option selected disabled>Escolha...</option>
                            <option value="AC">AC</option>
                            <option value="AL">AL</option>
                            <option value="AP">AP</option>
                            <option value="AM">AM</option>
                            <option value="BA">BA</option>
                            <option value="CE">CE</option>
                            <option value="DF">DF</option>
                            <option value="ES">ES</option>
                            <option value="GO">GO</option>
                            <option value="MA">MA</option>
                            <option value="MG">MG</option>
                            <option value="MT">MT</option>
                            <option value="MS">MS</option>
                            <option value="PA">PA</option>
                            <option value="PB">PB</option>
                            <option value="PR">PR</option>
                            <option value="PE">PE</option>
                            <option value="PI">PI</option>
                            <option value="RJ">RJ</option>
                            <option value="RN">RN</option>
                            <option value="RS">RS</option>
                            <option value="RO">RO</option>
                            <option value="RR">RR</option>
                            <option value="SC">SC</option>
                            <option value="SP">SP</option>
                            <option value="SE">SE</option>
                            <option value="TO">TO</option>
                        </select>
                        @error('uf')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="country">País*</label>
                        <input type="text" class="form-control" id="country" name="country" placeholder="País" value="{{ old('country') }}">
                        @error('country')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="my-3">
                <h5>Dados de contato</h5>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="home_phone">Telefone residencial</label>
                        <input type="text" class="form-control phone_with_ddd" id="home_phone" name="home_phone" placeholder="Ex.: (00)0000-0000" value="{{ old('home_phone') }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="work_phone">Telefone profissional</label>
                        <input type="text" class="form-control phone_with_ddd" id="work_phone" name="work_phone" placeholder="Ex.: (00)0000-0000" value="{{ old('work_phone') }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="mobile_phone">Telefone celular</label>
                        <input type="text" class="form-control mobile_with_ddd" id="mobile_phone" name="mobile_phone" placeholder="Ex.: (00)00000-0000" value="{{ old('mobile_phone') }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">E-mail*</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" value="{{ old('email') }}">
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="confirmEmail">Confirmar e-mail*</label>
                        <input type="text" class="form-control" id="confirmEmail" name="confirmEmail" placeholder="Confirmar e-mail">
                        @error('confirmEmail')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="my-3">
                <h5>Acessibilidade</h5>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        Necessita de recursos de acessibilidade?*
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="accessibility" id="accessSim" value="1">
                        <label class="form-check-label" for="accessSim">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="accessibility" id="accessNao" value="0">
                        <label class="form-check-label" for="accessNao">Não</label>
                    </div>
                </div>
                @error('accessibility')
                        <div class="text-danger">{{ $message }}</div>
                @enderror

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="accessibility_info">Utilize este espaço para indicar quais recursos de acessibilidade você necessita</label>
                        <input type="text" class="form-control" id="accessibility_info" name="accessibility_info" placeholder="" value="{{ old('accessibility_info') }}">
                    </div>
                </div>
            </div>

            <div class="my-3">
                <h5>Dados complementares</h5>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="gender">Gênero</label>
                        <input type="text" class="form-control" id="gender" name="gender" placeholder="Gênero" value="{{ old('gender') }}">
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
                        <label for="use_social_name">Prefere que o nome social seja utilizado na emissão do certificado?*</label>
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
            <div class="my-4">
                <input type="submit" class="btn btn-primary" style="width:120px" value="Enviar">
                <a href="instrucoes-inscricao" class="btn btn-primary" style="width:120px">Voltar</a>
            </div>
        </form>

    </div>

@endsection