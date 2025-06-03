<?php
require_once '../model/ModelRecolte.php';
class ControllerRecolte{

    public static function recolteReadAll(){
        $results=ModelRecolte::getAll();
        include "config.php";
        $vue = $root . '/app/view/recolte/viewAll.php';
        if (DEBUG)
         echo ("ControllerRecolte : RecolteReadAll : vue = $vue");
        require ($vue);
    }

    public static function recolteInsertUpdate(){
        $datas_vin=ModelRecolte::getAllOfVin();
        $datas_producteur=ModelRecolte::getAllOfProducteur();
        include 'config.php';
        $vue = $root . '/app/view/recolte/viewInsert.php';
        if (DEBUG)
            echo "ControllerRecolte : RecolteInsertUpdate : vue = $vue";
        require ($vue);
    }

    public static function recolteInsertedUpdated(){
        $results=ModelRecolte::insert_update(htmlspecialchars($_GET['producteur_id']), htmlspecialchars($_GET['vin_id']), htmlspecialchars($_GET['quantite']));
        include "config.php";
        $vue = $root . '/app/view/recolte/viewInserted.php';
        if (DEBUG)
            echo ("ControllerRecolte : RecolteInsertedUpdated : vue = $vue");
        require ($vue);
    }

}


?>