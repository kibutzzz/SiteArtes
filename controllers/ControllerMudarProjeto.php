<?php

require "Controller.php";


class ControllerMudarProjeto extends Controller {

    private $connection;

    function __construct() {
        parent::__construct();
    
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
            $projectInfo['members'] = $member;
        }

        
        $res = $this->connection->selectImagesByProjectId($id);
        while($image = $res->fetch_assoc()){
            $projectInfo['image'] = $image;
        }
                

        return $projectInfo;

    }

}