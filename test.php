<?php

    try {
        $db = new PDO("mysql:hostname=localhost;dbname=etat_civil;charset=utf8", "root", "");
    } catch (Exception $e) {
        die("Error : {$e->getMessage()}");
    }

    $name = htmlspecialchars(trim($_POST["nom"]));
    $prenom = htmlspecialchars(trim($_POST["prenom"]));
    $fonction = htmlspecialchars(trim($_POST["fonction"]));
    $mdp = htmlspecialchars(trim($_POST["mdp"]));
    $code_position = htmlspecialchars(trim($_POST["code_position"]));

    $request = "INSERT INTO fonction(nom,prenom,fonction,mdp,code_cle) VALUES (?,?,?,?,?)";
    $result = $db->prepare($request);
    $result->execute([$name, $prenom, $fonction, $mdp, $code_position]);


?>