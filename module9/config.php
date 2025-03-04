<?php
$server = 'localhost';
$username = 'root';
$dbname = 'db';
$password = '';
try{
    $connection = new PDO ("mySQL:host = $server;dbname=$dbname;"$username,$password);

} catch (Exception $e)[
    echo "Something went wrong";
]
?>