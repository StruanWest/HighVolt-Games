<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>

</body>
</html>

<?php

  $userTerms = explode(" ",trim($_POST['Username']))[0]; //Creating the userTerm variable which is linked to what has been typed into the the Username box from the login page, 'Username' being the id of the search box
  $passTerms = explode(" ",trim($_POST['Password']))[0]; //Creating the passTerm variable which is linked to what has been typed into the the Password box from the login page, 'Password' being the id of the search box

  $dbConnection = mysqli_connect("comp-server.uhi.ac.uk","18005704", "stu4nw","AR18005704"); //Connect to MyWebSQL
  if ($dbConnection) //if the connectiong is successful, then...
  {

    //Code being sent to MyWebSQL

    $sql = "Select * from Login

    where
    Username = '$userTerms' 
    and Password = '$passTerms';";

    $query = mysqli_query($dbConnection, $sql);
    if ($query)
    {
      // If we have a result then...
      if ($query->num_rows > 0) //If there are more than 0 rows, then...
      {
        while ($result = mysqli_fetch_object($query))
        {
          ?> 

            <figcaption class="welcome">
              <?php 
              include ("welcome.php"); //Show Welcome.php
              ?>
            </figcaption>

          <?php
        } 
        echo "</div>";
      } // If we can't find a result, then
      else
      {
          echo "Nothing happened...";
      }
    }
    else
    {
        echo "Error in your SQL";
    }

  }
  else
  {
    echo "Connection to database Failed";
    exit();
  }
?>