<!DOCTYPE html>
<?php
require "../controllers/ControllerPaginaInicial.php";
$controller = new ControllerPaginaInicial();
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $controller->getPageTitle() ?></title>
        <link rel="shortcut icon" type="image/png" href="<?= $controller->getIconPath() ?>"/>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
    <?php 
        require "modulos/menu-navegacao.php";
    ?>
        <div class="container">
            <?php
                require "modulos/descricao-do-projeto.php";
            ?>
        </div>	

    </body>
    <?php
    foreach ($controller->getScripts() as $script) {
        echo $script;
    }
    
    ?>
</html>
