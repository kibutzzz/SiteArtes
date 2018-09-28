<?php
require_once "../controllers/Controller.php";

class ControllerCadastroDeProjetos extends Controller {
    
    function __construct() {
        parent::__construct();
    
        $this->setPageTitle("Cadastro de Projetos | A parede");  
    }
    
}