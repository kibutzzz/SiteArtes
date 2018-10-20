<?php
require "../controllers/ControllerDetalhesProjeto.php";
$controller = new ControllerDetalhesProjeto();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title><?=$controller->getPageTitle()?></title>
        <?php
        foreach ($controller->getStyles() as $style) {
            echo $style;
        }
        ?>
    </head>
    <body>
        <?php $project = $controller->getProject($_GET['id']);
        var_dump($project)?>
        <div class="container">
            <?php require "./modulos/detalhe-projeto.php"; ?>
        </div>
        

    </body>
</html>

