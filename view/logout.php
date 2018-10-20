<?php
require '../controllers/session/SessionHandler.php';

$session_handler = new Session();
if($session_handler->getValue('logado')){
    $session_handler->destroy();
}
header("location: ./pagina-inicial.php");