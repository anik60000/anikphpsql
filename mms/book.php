<?php
session_start();

include_once('config.php');

$user_id=$_SESSION['id'];
$movie_id=$_SESSION['id'];

$nr_tickets=$_POST['nr-tickets'];
$data=$_POST['date'];
$time=$_POST['time'];

$sql="INSERT INTO bookings (:user_id,movie_id,nr_tickets,data,time) VALUE (:user_id,:movie_id,:nr_tickets,:data,:time)";

$insertBookings=$conn->prepare($sql);
$insertBookings->bindParam(":user_id",$user_id)
$insertBookings->bindParam("movie_id"$movie_id)
$insertBookings->bindParam("nr_tickets"$nr_tickets)
$insertBookings->bindParam("data"$data)
$insertBookings->bindParam("time"$time)

$insertBookings->execute();

header('Location:home.php');


?>