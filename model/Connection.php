<?php

Class Connection extends mysqli{

    private $connection;
    private $sql;

    public function __construct() {
        define("DB_NAME", 'a-parede');
        define("DB_PASSWORD", '');
        define("DB_HOST", 'localhost');
        define("DB_USER", 'root');
        

        $this->connect();
    }

    private function connect() {
        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if ($this->connection->connect_errno) {
            echo "Erro de conexão: " . $this->connection->connect_error;
        }
    }
       

}
