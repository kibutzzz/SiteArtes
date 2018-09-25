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
        <?php
        foreach($controller->getProjects() as $project){
            echo $project['nome'];
            echo "<br>";
            echo $project['resumo'];
            echo "<br>";
            echo $project['situacao'];
            echo "<br>";
            echo $project['turma'];
            echo "<br>";
            echo $project['data_cadastro'];
            echo "<br>";
            echo "<br>";
                
            echo "°asdòAáw";
        }
       
        ?>

    </body>
    <?php
        foreach($controller->getScripts() as $script) {
            echo $script;
        }
        $controller->closeConnection();
    ?>
</html>
