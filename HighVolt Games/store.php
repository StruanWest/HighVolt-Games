<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- This is just a font that we'll be using. You can remove lines 10-13 if you don't want to use Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <title>HighVolt Store</title>

  <?php
  include ("header.php");
  ?>
</head>


<body>

<!--BEST SELLERS-->

<div class="headers"> Best Sellers </div>


<?php

  $dbConnection = mysqli_connect("comp-server.uhi.ac.uk","18005704", "stu4nw","AR18005704"); //Connect to MyWebSQL
  if ($dbConnection) //if the connectiong is successful, then...
  {

    //Code being sent to MyWebSQL

    $sql = "Select * from HVGames_games_info

    where
    best_seller = 'YES';";

    $query = mysqli_query($dbConnection, $sql);
    if ($query)
    {
      // If we have a result then...
      if ($query->num_rows > 0) //If there are more than 0 rows, then...
      {
        while ($result = mysqli_fetch_object($query))
        {
          ?> 

                <figcaption class="results">
                  <?php
                  echo '<a href="game.php?id=' . $result->game_id . '">';
                  echo "<img width=25px height=25px src=\"assets/images/covers/" . $result->game_name . ".jpg\" class=game_boxes />"; //SHOW GAME BOX
                  echo $result->game_name . "<br>";
                  ?>
              </figcaption>


          <?php
        } 
        echo "</div>";
      } // If we can't find a result, then
      else
      {
          echo "No Games were found";
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

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<!--NEW RELEASES-->

<div class="headers"> New Releases </div>

<?php

  $dbConnection = mysqli_connect("comp-server.uhi.ac.uk","18005704", "stu4nw","AR18005704"); //Connect to MyWebSQL
  if ($dbConnection) //if the connectiong is successful, then...
  {

    //Code being sent to MyWebSQL

    $sql = "Select * from HVGames_games_info

    where
    new_release = 'YES';";

    $query = mysqli_query($dbConnection, $sql);
    if ($query)
    {
      // If we have a result then...
      if ($query->num_rows > 0) //If there are more than 0 rows, then...
      {
        while ($result = mysqli_fetch_object($query))
        {
          ?> 

                <figcaption class="results">
                    <?php
                    echo '<a href="game.php?id=' . $result->game_id . '">';
                    echo "<img width=25px height=25px src=\"assets/images/covers/" . $result->game_name . ".jpg\" class=game_boxes />"; //SHOW GAME BOX
                    echo $result->game_name . "<br>";
                    ?>
                </figcaption>


          <?php
        } 
        echo "</div>";
      } // If we can't find a result, then
      else
      {
          echo "No Users found";
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

</body>


<footer>
    <?php
    include ("footer.php");
    ?>
</footer>