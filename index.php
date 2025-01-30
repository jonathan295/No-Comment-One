<?php

    if(isset($_GET["action"])){  
        if($_GET["action"]=="login"){
            include("inscription.php");
            if (isset($_POST['soumettre'])) {
                if (!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["fonction"]) && !empty($_POST["mdp"]) && !empty($_POST["code_position"])){
                    require_once "test.php";
                    header("location: home.php"); 
                }               
            }else{
                //redirection
                header ('location:index.php?action=login');
            }
        }elseif ($_GET["action"]=="register-membre") {
            if(isset($_POST["btnRegister"])){
                require_once("test1.php");
                // $m= new membre ();
                // $m->enregistrer($_POST["nom"],$_POST["prenom"],$_POST["date_naissance"],$_POST["lieu_naissance"],$_POST["pere"],$_POST["mere"],$_POST["nomFokontany"]);
            }else{
                include("ajouter.php");
            }
        }    
    }else{
        include("inscription.php");
        
    }

?>

