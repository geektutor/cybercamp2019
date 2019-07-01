<?php
session_start();

require 'connection.php';
$alert = '';

$b = range(100000,999999);
shuffle($b);
$array = array_slice($b, 0, 100);
$delete = $pdo->prepare('INSERT INTO attend (pin) VALUES (?)');
$pdo->beginTransaction();
foreach($array as $apin){
    $delete->execute([$apin]);
    }
$pdo->commit();
var_dump($array);
?>

