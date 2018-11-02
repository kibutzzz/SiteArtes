<?php
require "../controllers /Controller.php";

class ControllerAdministracao extends Controller {
    
    private $connection;
    
    function __construct() {
        parent::__construct();
        $this->session_handler->setRedirectUrl(" ./pagina-inicial.php");
        if(!$this->session_handler->getValue('logado')){
            header("location: " . $this->session_handler->getRedirectUrl());
        }
        
        require_once "../model/Connection.php";
        $this->connection = new Connection();
        
        

    }

    public function getAllProjectsForTable() {
        $projects = [];
        $res = $this->connection->selectAllProjectsIdentificationData();
        
        while ($proj = $res->fetch_assoc()) {
            array_push($projects, $proj);
        }

        return $projects;
    }
    
}