<?php
require_once "Module.class.php";
class Cursus{
    private $listeModules;

    function __construct(){
        $this->listeModules=array();   
    }

    function addModule($module){
        $this->listeModules[$module->getSigle()]=$module;
    }

    function __toString(){
        return "Cursus ($this->listeModules)<br />\n";
    }

    function affiche(){
        print_r($this);
    }

}

?>