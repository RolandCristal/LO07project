<?php
require_once 'Model.php';

class ModelProducteur{

    private $id, $nom, $prenom, $region;

    public function __construct($id=NULL, $nom=NULL, $prenom=NULL, $region=NULL){
        if (!is_null($id)){
            $this->id=$id;
            $this->nom=$nom;
            $this->prenom=$prenom;
            $this->region=$region;
        }    
    }

    function setId($id){
        $this->id=$id;
    }

    function setNom($nom){
        $this->nom=$nom;
    }

    function setPrenom($prenom){
        $this->prenom=$prenom;
    }

    function setRegion($region){
        $this->region=$region;
    }

    function getId(){
        return $this->id;
    }

    function getNom(){
        return $this->nom;
    }

    function getPrenom(){
        return $this->prenom;
    }

    function getRegion(){
        return $this->region;
    }

    public static function getAllId2(){
        try {
            $database = Model::getInstance();
            $query = "select id from producteur";
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_COLUMN, 0);
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
           }
    }

    public static function getMany2($query) {
        try {
            $database = Model::getInstance();
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelProducteur");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function getAll2(){
        try {
            $database = Model::getInstance();
            $query = "select * from producteur";
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelProducteur");
            return $results;
           } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function getOne2($id){
        try {
            $database = Model::getInstance();
            $query = "select * from producteur where id = :id";
            $statement = $database->prepare($query);
            $statement->execute([
              'id' => $id
            ]);
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelProducteur");
            return $results;
           } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function insert2($nom, $prenom, $region){
        try {
            $database = Model::getInstance();
         
            // recherche de la valeur de la clé = max(id) + 1
            $query = "select max(id) from producteur";
            $statement = $database->query($query);
            $tuple = $statement->fetch();
            $id = $tuple['0'];
            $id++;
         
            // ajout d'un nouveau tuple;
            $query = "insert into producteur value (:id, :nom, :prenom, :region)";
            $statement = $database->prepare($query);
            $statement->execute([
              'id' => $id,
              'nom' => $nom,
              'prenom' => $prenom,
              'region' => $region
            ]);
            return $id;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return -1;
        }
    }

    public static function getRegions(){
        try {
            $database = Model::getInstance();
            $query = "select region from producteur group by region";
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelProducteur");
            return $results;
           } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function getProducteursByRegions(){
        try {
            $database = Model::getInstance();
            $query = "SELECT COUNT(*),region FROM producteur GROUP BY region";
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelProducteur");
            return $results;
           } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function delete($id){
        try{
          $database=Model::getInstance();
          $query="DELETE FROM producteur WHERE id = :id";
          $statement = $database->prepare($query);
          $statement->execute([
            'id' => $id
          ]);
          return $id;
        } catch (PDOException $e){
          printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
          return -1;
        }
    }

    public static function update2() {
        echo ("ModelProducteur : update() TODO ....");
        return null;
    }
      
    public static function delete2() {
        echo ("ModelProducteur : delete() TODO ....");
        return null;
    }

}



?>
