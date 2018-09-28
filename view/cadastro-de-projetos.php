<?php
require "../controllers/ControllerCadastroDeProjetos.php";
$controller = new ControllerCadastroDeProjetos();
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
        
            <?php require "./modulos/menu-navegacao.php"; ?>
        <div class="container">
            
        </div>
    </body>
    <?php
    foreach ($controller->getScripts() as $script) {
        echo $script;
    }
    
    ?>
</html>