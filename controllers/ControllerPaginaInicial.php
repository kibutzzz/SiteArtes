<?php
require "Controller.php";

class ControllerPaginaInicial extends Controller {
    private $connection;
    function __construct() {
        parent::__construct();
    
                
        require_once '../model/Connection.php';
        $this->addStyle("<link href='../style/pagina-inicial.css' rel='stylesheet'>");
        $this->connection = new Connection();        
    }
    
    
    function getProjects(){
        $projects = [];
        $res = $this->connection->selectAllProjects();
        
        while ($proj = $res->fetch_assoc()) {
            array_push($projects, $proj);
        }
        
        return $projects;
    }
    
    function closeConnection() {
        $this->connection->closeConnection();
    }
    
}