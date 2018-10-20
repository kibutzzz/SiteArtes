<?php

require 'Controller.php';

class ControllerLogin extends Controller {
    
    function __construct() {
        parent::__construct();
    
        $this->setPageTitle("Login | A parede");  
        $this->addStyle("<link href='../style/signin.css' rel='stylesheet'>");
        
    }
    
}