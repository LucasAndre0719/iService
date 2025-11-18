<?php

$usuario = 'root';
$senha = '';
$host = "localhost";
$dbname = "iservice";

try{
    $pdo=new PDO("mysql:host=$host;dbname=$dbname",$usuario,$senha);


    }catch(PDOException $e){
        echo $e->getMessage();
}
?>