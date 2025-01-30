<?php 

    try {
        $db = new PDO("mysql:hostname=localhost;dbname=etat_civil;charset=utf8", "root", "");
    } catch (Exception $e) {
        die("Error : {$e->getMessage()}");
    }

?>