<?php
require "../controllers /Controller.php";

class ControllerAdministracao extends Controller {
    
    function __construct() {
        parent::__construct();
        $this->session_handler->setRedirectUrl(" ./pagina-inicial.php");
        if(!$this->session_handler->getValue('logado')){
            header("location: " . $this->session_handler->getRedirectUrl());
        }
    }
    
}