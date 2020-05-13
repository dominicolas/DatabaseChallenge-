<?php

//Connects to local database
$servername = "localhost";
$user='root';
$pass='jenny13';
$db='Challenge';

//Uses criteria to enter database, or fails
$conn = new mysqli($servername, $user, $pass, $db) or die("Unable to connect to database");

//Checks connections
if($conn->connect_error){
  die("Connection failed: ".$conn->connect_error);
  }

?>
