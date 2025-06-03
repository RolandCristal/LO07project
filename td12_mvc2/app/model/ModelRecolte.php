<?php
require_once "Model.php";

class ModelRecolte{
    private $producteur_id, $vin_id, $region, $nom, $prenom, $cru, $degre, $annee, $quantite;

    public function __construct($producteur_id=NULL, $vin_id=NULL, $quantite=NULL, $region=NULL, $nom=NULL, $prenom=NULL, $cru=NULL, $degre=NULL, $annee=NULL){
        if ((!is_null($producteur_id)) and (!is_null($vin_id))){
            $this->producteur_id=$producteur_id;
            $this->vin_id=$vin_id;
            $this->region=$region;
            $this->nom=$nom;
            $this->prenom=$prenom;
            $this->cru=$cru;
            $this->degre=$degre;
            $this->annee=$annee;      
            $this->quantite=$quantite;
        }    
    }

    function setProducteur_id($producteur_id){
        $this->producteur_id=$producteur_id;
    }

    function setVin_id($vin_id){
        $this->vin_id=$vin_id;
    }

    function setRegion($region){
        $this->region=$region;
    }

    function setNom($nom){
        $this->nom=$nom;
    }

    function setPrenom($prenom){
        $this->prenom=$prenom;
    }

    function setCru($cru){
        $this->cru=$cru;
    }

    function setDegre($degre){
        $this->degre=$degre;
    }

    function setAnnee($annee){
        $this->annee=$annee;
    }

    function setQuantite($quantite){
        $this->quantite=$quantite;
    }

    function getProducteur_id(){
        return $this->producteur_id;
    }

    function getVin_id(){
        return $this->vin_id;
    }

    function getRegion(){
        return $this->region;
    }

    function getNom(){
        return $this->nom;
    }

    function getPrenom(){
        return $this->prenom;
    }

    function getCru(){
        return $this->cru;
    }

    function getDegre(){
        return $this->degre;
    }

    function getAnnee(){
        return $this->annee;
    }

    function getQuantite(){
        return $this->quantite;
    }

    public static function getAll(){
        try{
            $database=Model::getInstance();
            $query="SELECT region, cru, annee, degre, nom, prenom, quantite FROM vin, producteur, recolte WHERE recolte.vin_id=vin.id AND recolte.producteur_id=producteur.id ORDER BY region";
            $statement=$database->prepare($query);
            $statement->execute();
            $nbColonnes=$statement->columnCount();
            $cols=array();
            for ($i=0; $i<$nbColonnes; $i++){
                $cols[$i]=$statement->getColumnMeta($i)['name'];
            }
            $datas = $statement->fetchAll(PDO::FETCH_CLASS, "ModelRecolte");
            return array($cols,$datas);
        }catch (PDOException $e){
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }

    }

    public static function getAllOfVin(){
        try{
            $database=Model::getInstance();
            $query="SELECT vin_id, cru, annee, degre FROM vin, recolte WHERE recolte.vin_id=vin.id GROUP BY vin_id";
            $statement=$database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelRecolte");
            return $results;
        }catch (PDOException $e){
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function getAllOfProducteur(){
        try{
            $database=Model::getInstance();
            $query="SELECT producteur_id, nom, prenom, region FROM producteur, recolte WHERE recolte.producteur_id=producteur.id GROUP BY producteur_id";
            $statement=$database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelRecolte");
            return $results;
        }catch (PDOException $e){
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function insert_update($producteur_id, $vin_id, $quantite){
        try{
            $database=Model::getInstance();
            $query="SELECT * FROM recolte WHERE producteur_id = :producteur_id AND vin_id = :vin_id";
            $statement=$database->prepare($query);
            $statement->execute([
                'producteur_id' => $producteur_id,
                'vin_id' => $vin_id
            ]);
            if ($statement->fetch() == NULL){
                $query="INSERT INTO recolte VALUE (:producteur_id, :vin_id, :quantite)";
                $statement=$database->prepare($query);
                $statement->execute([
                    'producteur_id' => $producteur_id,
                    'vin_id' => $vin_id,
                    'quantite' => $quantite
                ]);
                return 0;
            }else{
                $query="UPDATE recolte SET quantite = :quantite WHERE producteur_id = :producteur_id AND vin_id = :vin_id";
                $statement=$database->prepare($query);
                $statement->execute([
                    'quantite' => $quantite,
                    'producteur_id' => $producteur_id,
                    'vin_id' => $vin_id
                ]);
                return 1;
            }
        }catch  (PDOException $e){
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }
    

}


?>