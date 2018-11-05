<?php
require "../controllers/ControllerJingle.php";
$controller = new ControllerJingle();
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
        <div class="container mt-3 text-center">
            <h2> Jingle do projeto </h2>
            <audio class="mt-2 mb-2" controls>
                <source src="../raw/jingle.mp3" type="audio/mpeg">
                Seu navegador não suporta este conteudo de audio.
            </audio>        

            <blockquote class="blockquote">
                <p class="mb-0">
                Se tem uma parede de cor diferente<br>
                Pode confiar, vem desenhar (2x)<br>
                </p>
                <p class="mb-0">
                A cor é preta, autorização foi revisada.<br>
                Os alunos podem rabiscar sem medo.<br>
                Passou pela da professora de artes.<br>
                E você pode desenhar não tem nenhum segredo.<br>
                </p>
                <p class="mb-0">
                Se tem uma parede de cor diferente<br>
                Pode confiar, vem desenhar (2x)<br>
                </p>
                <p class="mb-0">
                A parede tem uma lagartixa de identificação,<br>
                Levando o melhor giz com toda a dedicação<br>
                Em nosso projeto você pode confiar,<br>
                A inspiração está presente em todo lugar.<br>
                <p class="mb-0">
                Se tem uma parede de cor diferente<br>
                Pode confiar, vem desenhar (2x)<br>
                </p>
            </blockquote>

        </div>
        

    </body>
</html>