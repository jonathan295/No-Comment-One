<?php
    require_once 'Model/membre_model.php';
    class membre{

        public function enregistrer($nom,$prenom,$date_naissance ,$lieu_naissance,$pere,$mere,$proffesion,$nomFokontany){
            $nom = htmlspecialchars(trim($_POST['nom'] ));
            $prenom = htmlspecialchars(trim($_POST['prenom']));
            $date_naissance = htmlspecialchars(trim($_POST['date_naissance']));
            $lieu_naissance = htmlspecialchars(trim($_POST['lieu_naisssance']));
            $pere = htmlspecialchars(trim($_POST['pere'])); 
            $mere = htmlspecialchars(trim($_POST['mere']));
            $proffession = htmlspecialchars(trim($_POST['proffesion']));
            $nomFokontany = htmlspecialchars(trim($_POST['nonFokontany']));
            if($nom!="" && $prenom!="" && $date_naissance!="" && $lieu_naissance!="" && $pere!="" && $mere!="" && $proffession!="" && $nomFokontany!=""){
                require_once('Model/membre-model.php');
                $nn = new membre_model();
                $nn->insertion($nom, $prenom, $date_naissance, $lieu_naissance, $pere, $mere, $proffesion, $nomFokontany);
                header("location:");
            }
        }
        public function connexion($nom,$prenom,$fonction,$mdp,$code_position){
            $nom = htmlspecialchars(trim($_POST['nom'] ));
            $prenom = htmlspecialchars(trim($_POST['prenom']));
            $fonction = htmlspecialchars(trim($_POST['fonction']));
            $mdp = htmlspecialchars(trim($_POST['mdp']));
            $code_position = htmlspecialchars(trim($_POST['code_position']));
            if($nom!="" && $prenom!="" && $mdp!="" && $code_position!=""){
                require_once("model/membre_model.php");
                $mm = new membre_model();
                if($mm->verifyPassword($mdp)== 0){
                    if($mm->connexion($code_position)==0){
                        $mm->insertion_admin($nom, $prenom, $fonction, $mdp, $code_position);
                        header("location:");
                    }
                }
            }
        }

        public function CIN($nom,$prenom,$date_naissance,$lieu_naissance,$pere,$proffession1,$mere,$proffession2,$lieu_delivrance,$numCin){
            $nom = htmlspecialchars(trim($_POST['nomCin'] ));
            $prenom = htmlspecialchars(trim($_POST['prenomCin']));
            $date_naissance = htmlspecialchars(trim($_POST['date_naissanceCin']));
            $lieu_naissance = htmlspecialchars(trim($_POST['lieu_naisssanceCin']));
            $pere = htmlspecialchars(trim($_POST['pereCin'])); 
            $proffession1 = htmlspecialchars(trim($_POST['proffesion1']));
            $mere = htmlspecialchars(trim($_POST['mereCin']));
            $proffession2 = htmlspecialchars(trim($_POST['proffesion2']));
            $lieu_delivrance = htmlspecialchars(trim($_POST['lieu_delivrance']));
            $numCin = htmlspecialchars(trim($_POST['numCin']));
            if($nom!="" && $prenom!="" && $date_naissance!="" && $lieu_naissance!="" && $pere!="" && $proffession1!="" && $mere!="" && $proffession2!="" && $lieu_delivrance!="" && $numCin!=""){
                require_once("model/membre_model.php");
                $zz = new membre_model();
                $zz->insertion_Cin($nom, $prenom, $date_naissance, $lieu_naissance, $pere, $proffession1, $mere, $proffession2, $lieu_delivrance_cin, $num_cin);
            }
        }












    }
?>