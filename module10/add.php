<?php

require('config.php')
if(isset($_POST['submit'])){
    $name = $_POST ["name"]
    $username = $_POST ["username"]
    $email = $_POST ["email"]
    $sql = "INSERT INTO users(name,username,email);
    VALUES (:name , :username, :email)";
    $sqlquery = $connection ->prepare($sql)
    $sqlquery -> bind
}
     






?>