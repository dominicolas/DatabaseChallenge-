<?php

 include 'dbh.inc.php';

 $firstName=$_POST['firstName'];
 $lastName=$_POST['lastName'];
 $emailAddress=$_POST['emailAddress'];
 $birthDay=$_POST['birthDay'];

 //Checks if submit is pressed, runs query
    if(isset($_POST['submit'])){
      $sql = "INSERT INTO employee (firstName, lastName, emailAddress, birthDay)
               VALUES ('$firstName', '$lastName', '$emailAddress', '$birthDay')";

       if($conn->query($sql) === TRUE){
          echo "New record created successfully";
        }
       else{
         echo "Error ".$sql."<br>".$conn->error;
       }

    }

header("Location: challenge.php?submit=success");

 ?>
