<?php

    include_once "connexion.php";
    include_once "ajouter.php";

    $nome = htmlspecialchars(trim($_POST['nom'] ));
    $prenome = htmlspecialchars(trim($_POST['prenom']));
    $date_naissancee = htmlspecialchars(trim($_POST['date_naissance']));        
    $lieu_naissancee = htmlspecialchars(trim($_POST['lieu_naissance']));
    $peree = htmlspecialchars(trim($_POST['pere'])); 
    $meree = htmlspecialchars(trim($_POST['mere']));
    $nomFokontanye = htmlspecialchars(trim($_POST['nomFokontany']));


    $requeste = "INSERT INTO personne(nom,prenom,date_naissance,lieu_naissance,pere,mere,nomFokontany) VALUES (?,?,?,?,?,?,?)";
    $resulte = $db->prepare($requeste);
    $resulte->execute([$nome, $prenome, $date_naissancee, $lieu_naissancee ,$peree, $meree,$nomFokontanye]);


?>