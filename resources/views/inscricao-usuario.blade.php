<!DOCTYPE html>
<html lang="pt-br">
    @include('includes.head')
<body>
    <div class="sticky-top">
        @include('includes.navbar')
    </div>


    <div class="container">
        <div class="mb-1 pt-1">
            <h4 class="display-3">Ficha de Inscrição</h4>
            <p class="lead font-italic"></p>
        </div>
        <form id="inscricao-usuario" name="inscricao-usuario" method="post">
            @csrf
            <div class="my-3">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="modalidade">Modalidade*</label>
                        <input type="text" class="form-control" id="modalidade" name="register_modality" placeholder="Modalidade">
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
                        <input type="text" class="form-control cpf" id="cpf" name="cpf" placeholder="Ex.: 000.000.000-00">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="rg">RG*</label>
                        <input type="text" class="form-control" id="rg" name="rg" placeholder="RG">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="emissor">Orgão emissor*</label>
                        <input type="text" class="form-control" id="emissor" name="emissor" placeholder="Orgão Emissor">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="nome">Nome*</label>
                        <input type="text" class="form-control" id="nome" name="name" placeholder="Nome">
                        <small id="passwordHelpBlock" class="form-text text-muted">*Atenção: Confira se seu nome foi digitado corretamente!</small>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="nascimento">Data nascimento*</label>
                        <input type="date" class="form-control" id="nascimento" name="birth_date" placeholder="dd/mm/aaaa">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nomeSocial">Nome Social*</label>
                        <input type="text" class="form-control" id="nomeSocial" name="social_name" placeholder="Nome Social">
                        <small id="passwordHelpBlock" class="form-text text-muted">Se desejar, inclua neste campo seu nome de uso habitual.</small>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="instituicao">Instituição para crachá</label>
                        <input type="text" class="form-control" id="instituicao" name="institution" placeholder="Instituição para crachá">
                    </div>
                </div>
            </div>

            <div class="my-3">
                <h5>Formação</h5>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="titulacao">Titulação mais alta*</label>
                        <select class="form-control" name="education_level" id="titulacao">
                            <option selected disabled>Escolha...</option>
                            <option value="Ensino Medio">Ensino Médio</option>
                            <option value="Graduacao">Graduação</option>
                            <option value="Mestrado">Mestrado</option>
                            <option value="Doutorado">Doutorado</option>
                            <option value="Pos-Doutorado">Pós-Doutorado</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="instituicaoTitul">Instituição de titulação*</label>
                        <input type="text" class="form-control" id="instituicaoTitul" name="grad_school" placeholder="Instituição de titulação">
                    </div>
                </div>
            </div>

            <div class="my-3">
                <h5>Atuação Profissional</h5>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="situacaoProfis">Situação profissional*</label>
                        <input type="text" class="form-control" id="situacaoProfis" name="profession" placeholder="Situação profissional">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="filiacao">Filiação institucional</label>
                        <input type="text" class="form-control" id="filiacao" name="filiation" placeholder="Filiação institucional">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="cargo">Função institucional/Cargo</label>
                        <input type="text" class="form-control" id="cargo" name="job_title" placeholder="Função institucional/cargo">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="areasAtuacao">Áreas de atuação (informe as áreas de atuação separadas por ponto e vírgula)</label>
                        <input type="text" class="form-control" id="areasAtuacao" name="expertise" placeholder="Áreas de atuação">
                    </div>
                </div>
            </div>

            <div class="my-3">
                <h5>Endereço</h5>
                <div class="my-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="location" id="inlineRadio1" value="brasil">
                        <label class="form-check-label" for="inlineRadio1">Residência no Brasil</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="location" id="inlineRadio2" value="exterior">
                        <label class="form-check-label" for="inlineRadio2">Residência no Exterior</label>
                    </div>
                </div>
                
                <div class="form-row">                    
                    <div class="form-group col-md-6">
                        <label for="municipio">Município*</label>
                        <input type="text" class="form-control" id="municipio" name="city" placeholder="Município">
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
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="pais">País*</label>
                        <input type="text" class="form-control" id="pais" name="country" placeholder="País">
                    </div>
                </div>
            </div>

            <div class="my-3">
                <h5>Dados de contato</h5>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="telResid">Telefone residencial</label>
                        <input type="text" class="form-control phone_with_ddd" id="telResid" name="home_phone" placeholder="Ex.: (00)0000-0000">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="telProfis">Telefone profissional</label>
                        <input type="text" class="form-control phone_with_ddd" id="telProfis" name="work_phone" placeholder="Ex.: (00)0000-0000">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="telCelular">Telefone celular</label>
                        <input type="text" class="form-control mobile_with_ddd" id="telCelular" name="mobile_phone" placeholder="Ex.: (00)00000-0000">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">E-mail*</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="E-mail">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="confirmEmail">Confirmar e-mail*</label>
                        <input type="text" class="form-control" id="confirmEmail" placeholder="Confirmar e-mail">
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

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="outrasQuestoes">Utilize este espaço para indicar quais recursos de acessibilidade você necessita</label>
                        <input type="text" class="form-control" id="outrasQuestoes" name="accessibility_info" placeholder="">
                    </div>
                </div>
            </div>

            <div class="my-3">
                <h5>Dados complementares</h5>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="genero">Gênero</label>
                        <input type="text" class="form-control" id="genero" name="gender" placeholder="Gênero">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="raca">Raça/Cor*</label>
                        <select class="form-control" name="color" id="raca">
                            <option selected disabled>Escolha...</option>
                            <option value="Amarela">Amarela</option>
                            <option value="Branca">Branca</option>
                            <option value="Indigena">Indígena</option>
                            <option value="Parda">Parda</option>
                            <option value="Preta">Preta</option>
                            <option value="Nao declarado">Não desejo declarar</option>
                        </select>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="nomeCertific">Prefere que o nome social seja utilizado na emissão do certificado?*</label>
                        <select class="form-control" name="use_social_name" id="nomeCertific">
                            <option selected disabled>Escolha...</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="my-4">
                <input type="submit" class="btn btn-primary" style="width:120px" value="Enviar">
                <a href="instrucoes-inscricao" class="btn btn-primary" style="width:120px">Voltar</a>
            </div>
        </form>

    </div>

    <div>
        @include('includes.footer')
        @include('includes.script')
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
<script src="/js/inscricao-usuario-mascara.js"></script>
</body>

</html>