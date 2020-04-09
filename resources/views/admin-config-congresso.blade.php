<!DOCTYPE html>
<html lang="pt-br">

@include('includes.head')

<body>
    <!-- início divona container CONFIG CONGRESSO -->
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
                            <label class="font-weight-bold" for="name_conference">Nome do congresso</label>
                            <input type="text" class="form-control" id="name_conference" placeholder="Escolha um nome"
                                name="name_conference" required>
                        </div>

                        <!-- Entidade Promotora -->
                        <div class="col-md-12 mb-4">
                            <label class="font-weight-bold" for="promoting_entity">Entidade Promotora</label>
                            <input type="text" class="form-control" id="promoting_entity" placeholder="Escolha um nome"
                                name="promoting_entity" required>
                        </div>

                        <!-- E-mail principal de contato -->
                        <div class="col-md-12 mb-4">
                            <label class="font-weight-bold" for="primary_email">E-mail principal de contato</label>
                            <input type="email" class="form-control" id="primary_email" placeholder="Insira um e-mail"
                                name="primary_email" required>
                        </div>

                        <!-- Prazo de início -->
                        <div class="col-md-4 mb-4">
                            <label class="font-weight-bold" for="event_start_date">Início do evento</label>
                            <input type="date" class="form-control" id="event_start_date" placeholder="dd/mm/aaaa"
                                name="event_start_date" required>
                        </div>

                        <!-- Prazo de término -->
                        <div class="col-md-4 mb-4">
                            <label class="font-weight-bold" for="event_end_date">Término do evento</label>
                            <input type="date" class="form-control" id="event_end_date" placeholder="dd/mm/aaaa"
                                name="event_end_date" required>
                        </div>

                        <div class="col-md-6 mb-4">
                            <label class="font-weight-bold" for="how_to_subscribe">Instruções sobre como se
                                inscrever</label>
                            <textarea class="form-control" id="how_to_subscribe" rows="10"
                                name="how_to_subscribe"></textarea>
                            <small>As informações inseridas neste campo aparecerão na tela "Faça sua inscrição" </small>
                            <!-- aqui tem que por o php conforme a config no admin -->
                        </div>

                        <div class="col-md-6 mb-4">
                            <label class="font-weight-bold" for="appraiser_instructions">Instruções aos
                                pareceristas</label>
                            <textarea class="form-control" id="appraiser_instructions" rows="10"
                                name="appraiser_instructions"></textarea>
                            <small>As informações inseridas neste campo aparecerão na tela "Instruções aos avaliadores"
                            </small>
                            <!-- aqui tem que por o php conforme a config no admin -->
                        </div>

                        <!-- botão -->
                        <div class=" mt-4 col-md-12">
                            <button class="btn btn-primary" type="submit" style="width:120px">Criar</button>
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