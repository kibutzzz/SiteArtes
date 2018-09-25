<?php


class Controller {
    private $iconPath;
    private $pageTitle;
    private $scripts;
    private $styles;

    function __construct() {
        $this->scripts = [
            '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>',
            '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>',
        ];
        $this-> styles= [
            '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">',
        ];
        $this->pageTitle = "A parede";
        $this->iconPath = "../img/logo.png";
    }
    function setPageTitle($pageTitle) {
        $this->pageTitle = $pageTitle;
    }

    function addScript($script) {
        array_push($this->scripts, $script);
    }

    function addStyle($style) {
        array_push($this->styles, $style);
    }

        function getPageTitle() {
        return $this->pageTitle;
    }

    function getScripts() {
        return $this->scripts;
    }
    function getIconPath() {
        return $this->iconPath;
    }

    
    function getStyles() {
        return $this->styles;
    }

}
