<?php
    $host = "localhost";
    $dbname = "unilagco_wp813"; 
    $user = "unilagco_wp813";
    $password = "Rp@91S]1fs";

    try { 
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;",$user, $password);
    } 
    catch (PDOException $error) {
        echo 'Connection error: ' . $error->getMessage();
    }
?>