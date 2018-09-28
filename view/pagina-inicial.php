<?php
require "../controllers/ControllerPaginaInicial.php";
$controller = new ControllerPaginaInicial();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?= $controller->getPageTitle() ?></title>
        <link rel="shortcut icon" type="image/png" href=<?= $controller->getIconPath() ?>/>
        <?php
        foreach ($controller->getStyles() as $style) {
            echo $style;
        }
        ?>
    </head>
    <body>
        <div class="container">
            <?php require "/menu-navegacao.php"; ?>
            <?php require "/feed-projetos.php"; ?>
        </div>
    </body>
    <?php
    foreach ($controller->getScripts() as $script) {
        echo $script;
    }
    $controller->closeConnection();
    ?>
</html>
