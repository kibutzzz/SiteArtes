<?php

Class Connection {

    private $connection;
    private $sql;

    public function __construct() {

//        database info
        define("DB_NAME", 'parede-database');
        define("DB_PASSWORD", '');
        define("DB_HOST", 'localhost');
        define("DB_USER", 'root');

//      tables info
        define("TABLE_PROJETOS", 'projetos');
        define("TABLE_ADMINISTRADOR", "administrador");
        define("TABLE_PARTICIPANTES", "participantes");
        define("TABLE_IMAGENS", "imagens");

//        projetos columns
        define("PROJETOS_NOME", 'nome');
        define("PROJETOS_TURMA", 'turma');
        define("PROJETOS_RESUMO", 'resumo');
        define("PROJETOS_SITUACAO", 'situacao');
        define("PROJETOS_DATA_EXPOSICAO", 'data_exposicao');
        define("PROJETOS_DATA_CADASTRO", 'data_cadastro');

//        participantes columns
        define("PARTICIPANTES_NOME", "nome");
        define("PARTICIPANTES_EMAIL", "email");
        define("PARTICIPANTES_LIDER", "lider");
        define("PARTICIPANTES_PROJETOS_ID", "projetos_id");

//        admin columns
        define("ADMINISTRADOR_USUARIO", "usuario");
        define("ADMINISTRADOR_SENHA", "senha");

//        imagens columns
        define("IMAGENS_PROJETOS_ID", "projetos_id");
        define("IMAGENS_IMAGEM", "imagem");
        define("IMAGENS_TIPO", "tipo");


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
        // var_dump($this->sql);
        if ($this->connection->errno > 0) {
            echo "Erro de query: " . $this->connection->error;
        }

        return $res;
    }

    public function closeConnection() {
        $this->connection->close();
    }

    public function registerProject($name, $abstract, $class, $member_names, $member_emails, $image, $image_type) {

        $this->sql = "INSERT INTO " . TABLE_PROJETOS . " ("
                . PROJETOS_NOME . ", "
                . PROJETOS_TURMA . ", "
                . PROJETOS_RESUMO . ", "
                . PROJETOS_SITUACAO . ","
                . PROJETOS_DATA_CADASTRO
                . ") VALUES ('"
                . $name . "', '"
                . $class . "', '"
                . $abstract . "', "
                . 0 . ", "
                . "CURDATE());";

        $this->executeQuery();
        $last_id = $this->connection->insert_id;

        for ($i = 0; $i < sizeof($member_names); $i ++) {
            $this->sql = "INSERT INTO " . TABLE_PARTICIPANTES . "("
                    . PARTICIPANTES_NOME . ", "
                    . PARTICIPANTES_EMAIL . ", "
                    . PARTICIPANTES_LIDER . ", "
                    . PARTICIPANTES_PROJETOS_ID . ") values ('"
                    . $member_names[$i] . "', '"
                    . $member_emails[$i] . "', "
                    . ($i == 0 ? 1 : 0) . ", "
                    . $last_id . "); ";
            $this->executeQuery();
        }
        
        $this->sql = "INSERT INTO " . TABLE_IMAGENS . " ( "
                . IMAGENS_PROJETOS_ID . ", "
                . IMAGENS_IMAGEM . ", "
                . IMAGENS_TIPO . " ) values ( "
                . $last_id . ", "
                . "'" .$this->connection->real_escape_string(file_get_contents($image)) . "', "
                . "'" .$image_type . "'); ";
        
        $this->executeQuery();
    }

    public function getProjectById($id) {
        $this->sql = "SELECT * FROM " . TABLE_PROJETOS . " WHERE id = $id";

        $projectInfo["project_details"] = $this->executeQuery()->fetch_assoc();

        $this->sql = "SELECT " . PARTICIPANTES_NOME . ", "
                . PARTICIPANTES_EMAIL . ", "
                . PARTICIPANTES_LIDER . " FROM "
                . TABLE_PARTICIPANTES
                . " WHERE " . PARTICIPANTES_PROJETOS_ID . " = $id";
        $memberInfo = [];
        $members = $this->executeQuery();
        while ($member = $members->fetch_assoc()) {
            array_push($memberInfo, $member);
        }

        $projectInfo["member_details"] = $memberInfo;

        $this->sql = "SELECT * FROM " . TABLE_IMAGENS . " WHERE ". IMAGENS_PROJETOS_ID ." = $id;";
        $projectInfo["image"] = $this->executeQuery()->fetch_assoc();
        return $projectInfo;
    }

    function check_login($user, $password) {
        $this->sql = "SELECT * FROM " . TABLE_ADMINISTRADOR
                . " WHERE " . ADMINISTRADOR_USUARIO . " = '$user' "
                . "AND " . ADMINISTRADOR_SENHA . " = '$password'";

        return $this->executeQuery()->num_rows > 0;
    }

//    TODO bucar dados do banco
//    SELECT projetos.nome, projetos.situacao, participantes.nome FROM projetos INNER JOIN participantes ON participantes.projetos_id = projetos.id  WHERE participantes.lider = 1 
}
