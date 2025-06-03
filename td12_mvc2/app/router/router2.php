
<!-- ----- debut Router1 -->
<?php
require ('../controller/ControllerVin.php');
require '../controller/ControllerProducteur.php';
require '../controller/ControllerCave.php';
require '../controller/ControllerRecolte.php';

// --- récupération de l'action passée dans l'URL
$query_string = $_SERVER['QUERY_STRING'];

// fonction parse_str permet de construire 
// une table de hachage (clé + valeur)
parse_str($query_string, $param);

// --- $action contient le nom de la méthode statique recherchée
$action = htmlspecialchars($param["action"]);

// --- On supprime l'élement action de la structure
unset($param['action']);

// --- Tout ce qui reste sont des arguments
$args=$param;

// --- Liste des méthodes autorisées
switch ($action) {
  case "vinReadAll" :
  case "vinReadOne" :
  case "vinReadId" :
  case "vinCreate" :
  case "vinCreated" :
  case "vinDeleted" :
    ControllerVin::$action($args);
    break;

  case "producteurReadAll" :
  case "producteurReadOne" :
  case "producteurReadId" :
  case "producteurCreate" :
  case "producteurCreated" :
  case "producteurReadRegions" :
  case "producteurReadProducteursByRegions" :
  case "producteurDeleted";
    ControllerProducteur::$action($args);
    break;

  case "recolteReadAll" :
  case "recolteInsertUpdate" :
  case "recolteInsertedUpdated" :
    ControllerRecolte::$action();
    break;

  case "mesPropositions" :
    ControllerCave::$action();
    break;

 // Tache par défaut
 default:
  $action = "caveAccueil";
  ControllerCave::$action();
}
?>
<!-- ----- Fin Router1 -->

