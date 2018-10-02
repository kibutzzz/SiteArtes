<?php

Class Connection {

    private $connection;
    private $sql;

    public function __construct() {
        define("DB_NAME", 'parede-database');
        define("DB_PASSWORD", '');
        define("DB_HOST", 'localhost');
        define("DB_USER", 'root');
        define("TABLE_PROJETOS", 'projetos');
        
        
        $this->connect();
    }

    private function connect() {
        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $this->connection->set_charset("utf8");
          
        if ($this->connection->connect_errno) {
            echo "Erro de conexão: " . $this->connection->connect_error;
        }
    }
       
    public function selectAllProjects() {
        $this->sql = "SELECT * FROM " . TABLE_PROJETOS . " ;";
        
        return $this->executeQuery();
    }
    
    private function executeQuery() {

        $res = $this->connection->query($this->sql);
        if ($this->connection->errno) {
            return "Erro de query: " . $this->connection->error;
        }
        
        return $res;
    }
    
     public function closeConnection() {
        $this->connection->close();
    }
}
