<?php

if(isset($_POST)){
    $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_SPECIAL_CHARS);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
    
    var_dump($login);
    var_dump($senha);
    
    require "../../model/Connection.php";
    $connection = new Connection();
    
    if($connection->check_login($login, $senha)){
        session_start();
        $_SESSION['usuario'] = $login;
        var_dump($_SESSION);
    } else {
        header("location: ../../view/login.php?message=". urlencode("Usuario ou senha incorretos!"));
    }
    
}