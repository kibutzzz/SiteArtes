<?php

require "Controller.php";


class ControllerMudarProjeto extends Controller {

    private $connection;

    function __construct() {
        parent::__construct();
        $this->session_handler->setRedirectUrl(" ./pagina-inicial.php");
        if(!$this->session_handler->getValue('logado')){
            header("location: " . $this->session_handler->getRedirectUrl());
        }
        
        require_once '../model/Connection.php';
        $this->connection = new Connection();    

    }

    public function getAllInfoFromProjectId($id) {
        $projectInfo = [
            'project' => [],
            'members' => [],
            'images'  => []
        ];

        
        $projectInfo['project'] = $this->connection->selectProjectInfoById($id)->fetch_assoc();
        
        $res = $this->connection->selectMembersInfoByProjectId($id);
        while($member = $res->fetch_assoc()){
            array_push($projectInfo['members'], $member);
        }

        
        $res = $this->connection->selectImagesByProjectId($id);
        while($image = $res->fetch_assoc()){
            array_push($projectInfo['images'],  $image);
        }
                

        return $projectInfo;

    }

    function closeConnection() {
        $this->connection->closeConnection();
    }
}