<!DOCTYPE html>
<html lang="en">
    @include('includes.head')

<body>

    <div class="container">
        <div class="mb-1 pt-1">
            <h4 class="display-3">Área do parecerista</h4>
            <p class="lead font-italic"> </p>
        </div>
        <div>
            <a href="./link-instrucoes-avaliadores.php" target="_blank" class="d-block">Instruções aos avaliadores</a>
            <!-- add JS para abrir nova pagina pop-up -->
            <a href="#" class="d-block">Exportar resultados para Excel</a>
        </div>
        <hr class="my-3">
        <h5> Trabalhos pendentes </h5>
        <!-- add PHP para popular campos de trabalhos -->
        <form>
            <div class="form-row">
                <div class="col">
                    <label for="codigo-trabalho">Código do trabalho</label>
                    <input type="text" class="form-control" id="codigo-trabalho" name="work_code" placeholder="codigo do trabalho">
                </div>
                <div class="col">
                    <label for="nome-trabalho">Título do trabalho</label>
                    <input type="text" class="form-control" id="nome-trabalho" name="Work_title" placeholder="nome do trabalho">
                </div>
                <div class="col align-self-end"> <a href="parecerista-avaliar-trabalho.php">Avaliar trabalho</a></div>
            </div>
        </form>
        <hr class="my-3">
        <h5> Trabalhos aprovados </h5>
        <form>
            <div class="form-row">
                <div class="col">
                    <label for="codigo-trabalho">Código do trabalho</label>
                    <input type="text" class="form-control" id="codigo-trabalho" name="work_code" placeholder="codigo do trabalho">
                </div>
                <div class="col">
                    <label for="nome-trabalho">Título do trabalho</label>
                    <input type="text" class="form-control" id="nome-trabalho" name="work_title" placeholder="nome do trabalho">
                </div>
                <div class="col align-self-end"> <a href="#">Visualizar trabalho</a></div>
            </div>
        </form>
        <hr class="my-3">
        <h5> Trabalhos reprovados </h5>
        <form>
            <div class="form-row">
                <div class="col">
                    <label for="codigo-trabalho">Código do trabalho</label>
                    <input type="text" class="form-control" id="codigo-trabalho" name="work_code" placeholder="codigo do trabalho">
                </div>
                <div class="col">
                    <label for="nome-trabalho">Título do trabalho</label>
                    <input type="text" class="form-control" id="nome-trabalho" name="work_title" placeholder="nome do trabalho">
                </div>
                <div class="col align-self-end"> <a href="#">Visualizar trabalho</a></div>
            </div>
        </form>
        <hr class="my-3">
    </div>

</body>

</html>