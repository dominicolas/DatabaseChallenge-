<!DOCTYPE html>
<html>
  <head>
    <title>Employee Database</title>
    <link rel="stylesheet" type="text/css" href="challengestyle.css">
  </head>
<header>
  Employee Homepage
</header>

  <body>

    <?php

    include 'dbh.inc.php';

    //Selects all information from employee table
    $sql = "SELECT * FROM employee";
    $result = mysqli_query($conn, $sql) or die("Could not query to database");

    //Prints out employee table format
    echo"<table border='1'>";
    echo"<tr><td>Employee ID</td>
             <td>First Name</td>
             <td>Last Name</td>
             <td>Email Address</td>
             <td>Birthday</td>
        </tr>";

        //Prints out employee information from database
        while($row = mysqli_fetch_assoc($result)){
          echo"<tr><td><a href='editEmployeeInfo.php?id={$row[employeeID]}'>{$row['employeeID']}</a></td>";
          echo"<td>{$row['firstName']}</td>";
          echo"<td>{$row['lastName']}</td>";
          echo"<td>{$row['emailAddress']}</td>";
          echo"<td>{$row['birthDay']}</td></tr>\n";
        }

        echo"</table>";

     ?>
     <div>
     </br>
       Enter in new employee information below
     </div></br>

     <!-- New employee info form -->
     <form action="submit.inc.php" method="post">
         <input type="text" name="firstName" placeholder="First Name"><br>
         <input type="text" name="lastName" placeholder="Last Name"><br>
         <input type="text" name="emailAddress" placeholder="Email Address"><br>
         <input type="text" name="birthDay" placeholder="Birthday (YYYY-MM-DD)"><br>
       <button type="submit" name="submit">Submit</button>
     </form>

  </body>
</html>
