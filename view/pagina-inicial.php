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

    </body>
    <?php
        foreach($controller->getScripts() as $script) {
            echo $script;
        }
    ?>
</html>
