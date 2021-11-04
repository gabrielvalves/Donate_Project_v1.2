<?php

session_start();

$localhost = "localhost";
$usuario = "root";
$senha = "";
$bd = "teste";

global $pdo;

try{

    $pdo =  new PDO("mysql:dbname=".$bd."; host=".$localhost, $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo "ERRO".$e->getMessage();
    exit;
}
