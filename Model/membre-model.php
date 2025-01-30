<?php
include_once "./Data-base/connecting.php";
class membre_model{
    private $db;
    
    // public function __construct(){
    //     try {
    //         $this->db = new PDO("mysql:host=localhost;dbname:etatcivil","root","");
    //     } catch (PDOException $e) {
    //         echo 'erreur de connexion au serveur !! : '. $e->getMessage();
    //         die;
    //     }
    // }  

    public function connexion($code_position){
       $req = $this->db->prepare("SELECT * FROM fonctionnaire WHERE code_clé = ?");
       $req->execute([$code_position]);
       return $req->rowCount();
    }

    public function verifyPassword($mdp){
        $req = $this->db->prepare("SELECT * FROM fonctionnaire WHERE mot_de_passe = ?");
        $req->execute([$mdp]);
        return $req->rowCount();

    }
    public function insertion($nom,$prenom,$date_naissance,$lieu_naissance,$pere,$mere,$nomFokontany){
        $req = $this->db->prepare("INSERT INTO personne(nom,prenom,date_naissance,lieu_naissance,pere,mere,proffession,nomFokontany) VALUES (?,?,?,?,?,?,?,?)");
        $req->execute([$nom,$prenom,$date_naissance,$lieu_naissance,$pere,$mere,$nomFokontany]);
    }

    public function insertion_admin($nom,$prenom,$fonction,$mdp,$code_position){
        include_once "./Data-base/connecting.php";
        $req = $this->db->prepare("INSERT INTO fonctionnaire(nom,prenom,fonction,mot_de_passe,code_clé) VALUES (?,?,?,?,?)");
        $req->execute([$nom,$prenom,$fonction,$mdp,$code_position]);
        return $req = $req->fetchAll();
    }

    public function insertion_Cin($nom,$prenom,$date_naissance,$lieu_naissance,$pere,$proffession1,$mere,$proffession2,$lieu_delivrance_cin,$num_cin){
        $req = $this->db->prepare("INSERT INTO cin(nom,prenom,date_naissance,lieu_naissance,pere,proffession1,mere,proffession2,lieu_delivrance_cin,num_cin) VALUES (?,?,?,?,?,?,?,?,?,?");
        $req->execute([$nom,$prenom,$date_naissance,$lieu_naissance,$pere,$proffession1,$mere,$proffession2,$lieu_delivrance_cin,$num_cin]);
    }

}








?>