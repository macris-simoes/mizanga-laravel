<!DOCTYPE html>
<html lang="pt-br">
    
@include('includes.head')

<body>
    <!-- início divona container -->
    <div class="container">

        <!-- início Cabeçalho1 -->
        <div class="mb-1 pt-1">
            <h1 class="display-3">Congresso</h1>
            <p class="lead font-italic"> Gerenciar informações do congresso</p>
        </div>
        <!-- fim Cabeçalho1 -->

        <!-- início div row -->
        <div class="row">

            <!-- início div config -->
            <div class="col-md-12 my-1">
                <!-- início do form de modalidades -->
                <form action="" method="POST">
                    @csrf
                    <!-- início da div form-row -->
                    <div class="form-row">
                        <!-- identificação -->
                        <div class="col-md-12 mb-4">
                            <label class="font-weight-bold" for="validationTooltip01">Nome do congresso</label>
                            <input type="text" class="form-control" id="validationTooltip01" placeholder="Escolha um nome" name="name_congress" required>
                        </div>

                        <!-- Entidade Promotora -->
                        <div class="col-md-12 mb-4">
                            <label class="font-weight-bold" for="validationTooltip01">Entidade Promotora</label>
                            <input type="text" class="form-control" id="validationTooltip01" placeholder="Escolha um nome" name="promoting_entity" required>
                        </div>

                        <!-- E-mail principal de contato -->
                        <div class="col-md-12 mb-4">
                            <label class="font-weight-bold" for="validationTooltip06">E-mail principal de contato</label>
                            <input type="email" class="form-control" id="validationTooltip06" placeholder="Insira um e-mail" name="primary_email" required>
                        </div>

                        <!-- Prazo de início -->
                        <div class="col-md-4 mb-4">
                            <label class="font-weight-bold" for="validationTooltip04">Início do evento</label>
                            <input type="date" class="form-control" id="validationTooltip04" placeholder="dd/mm/aaaa" name="event_start_date" required>
                        </div>

                        <!-- Prazo de término -->
                        <div class="col-md-4 mb-4">
                            <label class="font-weight-bold" for="validationTooltip05">Término do evento</label>
                            <input type="date" class="form-control" id="validationTooltip05" placeholder="dd/mm/aaaa" name="event_end_date" required>
                        </div>

                        <div class="col-md-6 mb-4">
                            <label class="font-weight-bold" for="exampleFormControlTextarea1">Instruções sobre como se inscrever</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="how_to_subscribe"></textarea>
                            <small>As informações inseridas neste campo aparecerão na tela "Faça sua inscrição" </small>
                            <!-- aqui tem que por o php conforme a config no admin -->
                        </div>

                        <div class="col-md-6 mb-4">
                            <label class="font-weight-bold" for="exampleFormControlTextarea2">Instruções aos pareceristas</label>
                            <textarea class="form-control" id="exampleFormControlTextarea2" rows="10" name="appraiser_instructions"></textarea>
                            <small>As informações inseridas neste campo aparecerão na tela "Instruções aos avaliadores" </small>
                            <!-- aqui tem que por o php conforme a config no admin -->
                        </div>

                        <!-- botão -->
                        <div class=" mt-4 col-md-12">
                            <button class="btn btn-success" type="submit" style="width:120px">Criar!</button>
                        </div>

                    </div>
                    <!-- fim da div form-row -->
                </form>
                <!-- fim do form de modalidades -->

            </div>
            <!-- fim div config -->

        </div>
        <!-- fim div row -->

    </div>
    <!-- div container -->

</body>

</html>