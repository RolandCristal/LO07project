<?php
include_once "Module.class.php";

class Cursus2 {
    private $listeModules2;

    function __construct() {
        if (!empty($_SESSION)) {
            $this->listeModules2 = $_SESSION;
        } else {
            $this->listeModules2 = array();
        }
    }

    function addModule2($module) {
        $this->listeModules2[$module->getSigle()] = $module;
        $_SESSION[$module->getSigle()] = $module;
    }

    function __toString() {
        return "Cursus (".print_r($this->listeModules2, true).")<br />\n";
    }

    function affiche() {
        print_r($this->listeModules2);
    }
}
?>