<?php
require "../controllers/ControllerFlyer.php";
$controller = new ControllerFlyer();
?>
<!DOCTYPE html>
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
        <div class="container mt-3 mb-3 text-center">
            <h2 class="mb-3"> Flyer do projeto </h2>
            <img class="img-fluid col-md-4 " src="../raw/flyer1.jpg" height="220" />

            <img class="img-fluid col-md-4" src="../raw/flyer2.jpg" height="220" />

        </div>
        

    </body>
</html>