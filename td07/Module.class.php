<?php
require_once 'Charte.class.php';
require_once 'WebBean.interface.php';
class Module implements WebBean{
    private $sigle;
    private $label;
    private $categorie;
    private $effectif;
    private $listeErreurs=array();

    function getSigle(){
        return $this->sigle;
    }
    function setSigle($value){
        $this->sigle = $value;
    }

    function getLabel(){
        return $this->label;
    }
    function setLabel($value){
        $this->label = $value;
    }

    function getCategorie(){
        return $this->categorie;
    }
    function setCategorie($value){
        $this->categorie = $value;
    }

    function getEffectif(){
        return $this->effectif;
    }
    function setEffectif($value){
        $this->effectif = $value;
    }

    function __construct($sigle, $label, $categorie, $effectif){
        $this->setSigle ($sigle);
        $this->setLabel($label);
        $this->setCategorie($categorie);
        $this->setEffectif($effectif);
    }

    function __toString(){
        return "Module ($this->sigle, $this->label, $this->categorie, $this->effectif)<br />\n";
    }

    public function valide(){
        $resultat = TRUE;
        $sigle = filter_input(INPUT_GET, "sigle", FILTER_DEFAULT);
        if (strlen($sigle)==0){
            $resultat=FALSE;
            $this->listeErreurs["sigle"] = "Sigle n'est pas défini.";
        }
        return $resultat;
    }

    public function pageKO(){
        echo Charte::html_head_bootstrap5("TD08");
        echo "<h2>Votre formulaire n'est pas correct</h2>";
        foreach ($this->listeErreurs as $key => $value){
            echo "$key => $value <br />\n";
        }
        echo Charte::html_foot_bootstrap5();
    }

    public function pageOK(){
        echo Charte::html_head_bootstrap5("TD08");
        echo "<h2>Votre formulaire est correct</h2>";
        foreach ($_GET as $key => $value){
            echo "$key => $value <br />\n";
        }
    }

    public function pageFoot(){
        echo Charte::html_foot_bootstrap5();
    }

    public function sauveTXT(){
        $resultat=$this->sigle."; ";
        $resultat.=$this->label."; ";
        $resultat.=$this->categorie."; ";
        $resultat.=$this->effectif.")";
        return $resultat;
    }

    public function sauveXML($file){
        return $file;
    }

    public function sauveBDR($table){
        $resultat="insert into".$table."values (";
        $resultat.="'".$this->sigle."', ";
        $resultat.="'".$this->label."', ";
        $resultat.="'".$this->categorie."', ";
        $resultat.="'".$this->effectif.")";
        return $resultat;
    }

    public function createTable($table){
        echo "create table $table (sigle varchar(6) not null, categorie varchar(2) check categorie in ('CS', 'TM', 'EC', 'EC', 'ME', 'CT'), label varchar(40) not null, effectif integer, primary key (sigle));";
    }
}
?>