<?php
require '../controllers/ControllerAdministracao.php';
$controller = new ControllerAdministracao();
?>

<html>
    <head>
        <title><?= $controller->getPageTitle() ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png" href="<?= $controller->getIconPath() ?>"/>
        <?php
        foreach ($controller->getStyles() as $style) {
            echo $style;
        }
        ?>
    </head>
    <body>

        <?php
        require './modulos/menu-navegacao.php';
        ?>
        <div class="container mt-3">
            <h2>Section title</h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Situação</th>
                            <th>Lider</th>
                            <th>adsadka</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>substituir</td>
                            <td>por</td>
                            <td>dados</td>
                            <td>do</td>
                            <td>banco</td>
                        </tr>
                        <?php
//                        TODO consulta aos dados do banco
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
    <?php
    foreach ($controller->getScripts() as $script) {
        echo $script;
    }
    ?>
</html>
