<?php
require "../controllers/ControllerDetalhesProjeto.php";
$controller = new ControllerDetalhesProjeto();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png" href="<?= $controller->getIconPath() ?>"/>
        <title><?=$controller->getPageTitle()?></title>
        <?php
        foreach ($controller->getStyles() as $style) {
            echo $style;
        }
        ?>
    </head>
    <body>
        <?php
            require "./modulos/menu-navegacao.php";
        ?>
        <?php $project = $controller->getProject($_GET['id']);
        // var_dump($project);
        ?>
        <div class="container">
            <?php require "./modulos/detalhe-projeto.php"; ?>
        </div>
        
        <?php
            foreach ($controller->getScripts() as $script) {
                echo $script;
            }
            $controller->closeConnection();
        ?>
    </body>
</html>

