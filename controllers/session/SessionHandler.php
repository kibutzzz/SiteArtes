<?php

class Session {
    
    function __construct() {
        session_start();
    }
    
    function addValue($key, $value){
        $_SESSION[$key] = $value;
    }
    
    function getValue($key){
        return  isset($_SESSION[$key]) ? $_SESSION[$key] : false;
    }
    
    function destroy() {
        session_destroy();
    }
}

