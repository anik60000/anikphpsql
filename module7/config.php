<?php
$host = 'localhost';
$user = 'root';
$password = '';

try{
    $conn = new PDO ("mysql:host=$host",$user,$password);
    $sql = "CREATE DATABASE project1";
    $conn->exec($sql);

    echo "Connection Successful";

}


catcg (Exception $e){
    echo "Error".$e;
}


?>