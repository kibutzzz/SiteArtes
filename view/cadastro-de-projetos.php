<!DOCTYPE html>
<?php
require "../controllers/ControllerCadastroDeProjetos.php";
$controller = new ControllerCadastroDeProjetos();
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $controller->getPageTitle() ?></title>
        <link rel="shortcut icon" type="image/png" href=<?= $controller->getIconPath() ?>/>
        <?php
        foreach ($controller->getStyles() as $style) {
            echo $style;
        }
        ?>
    </head>
    <body>

        <?php require "./modulos/menu-navegacao.php"; ?>
        <div class="container mt-3">
            <form action="../controllers/form-handlers/cadastro-de-projeto.php" method="POST">
                <h2>Cadastro do projeto</h2>
                <div class="form-group row">
                    <label for="inputNome" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  placeholder="Nome do projeto">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="selectTurma">Turma</label>
                    <div class="col-sm-10">
                        <select class="form-control">
                            <option>Informática 1° ano</option>
                            <option>Informática 2° ano</option>
                            <option>Informática 3° ano</option>
                            <option>Informática 4° ano</option>
                            <option>Eletromecanica 1°</option>
                            <option>Eletromecanica 2°</option>
                            <option>Eletromecanica 3°</option>
                            <option>Eletromecanica 4°</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="resumo">Resumo:</label>
                    <textarea class="form-control" rows="10" ></textarea>
                </div>



                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </div>
                
                <!--TODO terminar formulario com o cadastro de participantes do projeto-->
            </form>
        </div>
    </body>
    <?php
    foreach ($controller->getScripts() as $script) {
        echo $script;
    }
    ?>
</html>