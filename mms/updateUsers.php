<?php

include_once('config.php');

if(isset($_POST['submit'])){
   $id=$_POST['id'];
   $id=$_POST['emri'];
   $id=$_POST['username'];
   $id=$_POST['email'];

   $sql="UPDATE users SET id=:id,emri=:emri,username=:username,email=:email WHERE id=:id";

   $prep=$conn->prepare($sql);
   $prep->bindParam(':id',$id);
   $prep->bindParam(':emri',$emri);
   $prep->bindParam(':username',$username);
   $prep->bindParam(':email',$email);
   $prep->execute();

   header('Location:dashboard.php');
}
