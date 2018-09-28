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
            <?php
            foreach ($controller->getProjects() as $project) {
                
                ?>

                <div class="card mt-4" >
                    <!--<img class="card-img-top" src="#" alt="foto do projeto">-->
                    <div class="card-body">
                        <h5 class="card-title"><?= $project['nome'] ?></h5>
                        <p class="card-text"><?= $project['resumo']?></p>
                        <a href="#" class="btn btn-primary">Visualizar projeto</a>
                    </div>
                </div>

                <?php
            }
            ?>
        </div>
    </body>
    <?php
    foreach ($controller->getScripts() as $script) {
        echo $script;
    }
    $controller->closeConnection();
    ?>
</html>
