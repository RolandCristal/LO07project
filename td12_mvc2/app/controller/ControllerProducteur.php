<?php
require_once '../model/ModelProducteur.php';
class ControllerProducteur{
    
    public static function producteurReadAll(){
        $results = ModelProducteur::getAll2();
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/producteur/viewAll.php';
        if (DEBUG)
         echo ("ControllerProducteur : ProducteurReadAll : vue = $vue");
        require ($vue);
    }

    public static function producteurReadId($args){
        $results = ModelProducteur::getAllId2();

        $target=$args['target'];
        if (DEBUG) echo "ControllerVin:vinReadId : target=$target</br>";

        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/producteur/viewId.php';
        require ($vue);
    }

    public static function producteurReadOne(){
        $producteur_id = $_GET['id'];
        $results = ModelProducteur::getOne2($producteur_id);
      
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/producteur/viewAll.php';
        require ($vue);
    }

    public static function producteurCreate(){
          // ----- Construction chemin de la vue
        include 'config.php';
         $vue = $root . '/app/view/producteur/viewInsert.php';
        require ($vue);
    }

    public static function producteurCreated(){
        // ajouter une validation des informations du formulaire
        $results = ModelProducteur::insert2(
            htmlspecialchars($_GET['nom']), htmlspecialchars($_GET['prenom']), htmlspecialchars($_GET['region'])
        );
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/producteur/viewInserted.php';
        require ($vue);
    }

    public static function producteurReadRegions(){
        $results = ModelProducteur::getRegions();
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/producteur/viewRegions.php';
        if (DEBUG)
         echo ("ControllerProducteur : ProducteurReadRegions : vue = $vue");
        require ($vue);
    }

    public static function producteurReadProducteursByRegions(){
        $results = ModelProducteur::getProducteursByRegions();
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/producteur/viewProducteursByRegions.php';
        if (DEBUG)
         echo ("ControllerProducteur : ProducteurReadProducteursByRegions : vue = $vue");
        require ($vue);
    }

    public static function producteurDeleted(){
        // ajouter une validation des informations du formulaire
        $id=$_GET['id'];
        $results = ModelProducteur::delete(
           htmlspecialchars($id)
        );
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/producteur/viewDeleted.php';
        require ($vue);
    }

}


?>