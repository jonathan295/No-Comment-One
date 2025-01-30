<?php 
    try {
        global $db;
        $db = new PDO("mysql:host=localhost;dbname:etatcivil","root","");
    } catch (PDOException $e) {
        echo 'erreur de connexion au serveur !! : '. $e->getMessage();
        die;
    }
?>