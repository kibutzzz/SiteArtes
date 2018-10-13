<?php

require "Controller.php";

class ControllerDetalhesProjeto extends Controller {
    private $connection;
    function __construct() {
        parent::__construct();
        
        $this->setPageTitle("Detalhes do projeto");
                
        require_once '../model/Connection.php';
        $this->connection = new Connection();        
    }
    
    public function getProject($id){
        
        return ($this->connection->getProjectById($id));
        
    }
    
    function closeConnection() {
        $this->connection->closeConnection();
    }
}

