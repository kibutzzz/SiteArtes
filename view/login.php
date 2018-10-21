<?php
require "../controllers/ControllerLogin.php";

$controller = new ControllerLogin();

?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png" href="<?= $controller->getIconPath() ?>"/>
        <title><?=$controller->getPageTitle() ?></title>
        
        <?php
        foreach ($controller->getStyles() as $style) {
            echo $style;
        }
        ?>
    </head>
    <body class="text-center">
        <form class="form-signin" method="POST" action="../controllers/form-handlers/login.php">
            <!--<img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">-->
            <h1 class="h3 mb-3 font-weight-normal">Area Administrativa</h1>
            <label for="inputUsuario" class="sr-only">Usuário</label>
            <input type="text" id="inputEmail" class="form-control" placeholder="Usuário" name="login" required autofocus>
            <label for="inputSenha" class="sr-only">senha</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Senha" name="senha" required>
            
            <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Efetuar Login</button>
            <?= isset($_GET['message']) ? "<label class='warning'>".$_GET['message']." </label>" : "" ?>
            <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
        </form>
    </body>

</body>
</html>
