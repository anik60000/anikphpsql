<?php
$server = 'localhost';
$username = 'root';
$dbname = 'db';
$password = '';

try{
    $connection = new PDO ("mysql:host = $server; dbname=$dbname",$username,$password);

    echo "Connection succesful";

} catch (Exception $e){
    echo "Something went wrong";
}








?>