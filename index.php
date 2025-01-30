<?php

if(isset($_GET["action"])){  
    if($_GET["action"]=="login"){
        include("inscription.php");
        if (isset($_POST['soumettre'])) {
            include('Model/membre-model.php');
            $cc= new membre_model();
            $cc->insertion_admin($_POST["nom"],$_POST["prenom"],$_POST["fonction"],$_POST["mdp"],$_POST["code_position"]); 
            include('home.php');                 
        }else{
            //redirection
            header ('location:index.php?action=login');
        }
    }elseif ($_GET["action"]=="register-membre") {
        if(isset($_POST["btnRegister"])){
            require_once("controlleur/membre.php");
            $m= new membre ();
            $m->enregistrer($_POST["nom"],$_POST["prenom"],$_POST["date_naissance"],$_POST["lieu_naissance"],$_POST["pere"],$_POST["mere"],$_POST["nomFokontany"]);
            // include("views/reserver.php"); 
        }else{
            include("ajouter.php");
        }
    }    
}else{
    include("inscription.php");
    
}

?>