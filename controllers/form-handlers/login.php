<?php

if ($_POST) {
    $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_SPECIAL_CHARS);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);

    require "../../model/Connection.php";
    $connection = new Connection();

    if ($connection->check_login($login, md5($senha))) {
        require "../session/SessionHandler.php";
        $session_handler = new Session();
        $session_handler->addValue('login', $login);
        $session_handler->addValue('logado', TRUE);
        $connection->closeConnection();
        header("location: ../../view/administracao.php");
    } else {
        $connection->closeConnection();
        header("location: ../../view/login.php?message=" 
                . urlencode("Usuario ou senha incorretos!"));
    }
}