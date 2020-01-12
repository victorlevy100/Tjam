<?php
session_start();
global $pdo;
try{
    $pdo = new PDO('mysql:host=localhost;dbname=sys_alvara', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    echo "ERRO ".$e->getMessage();
    exit;
}
$sql = $pdo->query("SELECT * FROM usuario");
$sql->execute();
echo $sql->rowCount();
