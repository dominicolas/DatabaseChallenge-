<?php

$user='root';
$pass='jenny13';
$db='Challenge';

$db = new mysqli('localhost',$user, $pass, $db) or die("Unable to connect to database");

$sql = "SELECT * FROM employee";
$result = mysqli_query($db, $sql) or die("Could not query to database");

echo"<table border='1'>";
echo"<tr><td>Employee ID</td>
         <td>First Name</td>
         <td>Last Name</td>
         <td>Email Address</td>
         <td>Birthday</td>
    </tr>";

    while($row = mysqli_fetch_assoc($result)){
      echo"<tr><td>{$row['employeeID']}</td>";
      echo"<td>{$row['firstName']}</td>";
      echo"<td>{$row['lastName']}</td>";
      echo"<td>{$row['emailAddress']}</td>";
      echo"<td>{$row['birthDay']}</td></tr>\n";
    }

    echo"</table>";

 ?>
