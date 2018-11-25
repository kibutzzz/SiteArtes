<!DOCTYPE html>
<?php
require "../controllers/ControllerCadastroDeProjetos.php";
$controller = new ControllerCadastroDeProjetos();
$step = 0;
if (isset($_GET['step'])) {
    $step = filter_input(INPUT_GET, 'step', FILTER_SANITIZE_NUMBER_INT);
}
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $controller->getPageTitle() ?></title>
        <link rel="shortcut icon" type="image/png" href="<?= $controller->getIconPath() ?>"/>
        <?php
        foreach ($controller->getStyles() as $style) {
            echo $style;
        }
        ?>
    </head>
    <body>

        <?php require "./modulos/menu-navegacao.php"; ?>
        <div class="container mt-3">

            <?php
            switch ($step) {
                case 1:
                    require "./modulos/cadastro-dados-participantes.php";
                    break;
                default:
                    require "./modulos/cadastro-dados-projeto.php";
                    break;
            }
            ?>          
        </div>
        <div class="container">
            <p>Ao se cadastrar no projeto você concorda com as <a href="https://docs.google.com/document/d/1tUc9BypTQmDSbhB7aUbSrPbkGrOSJ6GI3bosB_QF_Nc/edit?usp=sharing" target="_blank">regras do projeto</a></p>
        </div>
    </div>
</body>
<?php
foreach ($controller->getScripts() as $script) {
    echo $script;
}
?>
</html>