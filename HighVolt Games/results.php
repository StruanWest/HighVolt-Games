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
    <title>Mad Marks Search</title>

<header>
  <?php
  include ("header.php");
  ?>
</header>

<body>
</body>

</html>

<?php

  $searchTerms = explode(" ",trim($_POST['search']))[0];

  $dbConnection = mysqli_connect("comp-server.uhi.ac.uk","18005704", "stu4nw","AR18005704"); //Connect to database
  if ($dbConnection)
  {
    // Connection is successful

    $sql = "Select * from HVGames_games_info
    JOIN HVGames_consoles
    ON HVGames_games_info.game_id = HVGames_consoles.game_id

    where
    game_name like '%$searchTerms%' 
    or rating like '%$searchTerms%' 
    or main_character like '%$searchTerms%' 
    or genre like '%$searchTerms%' 
    or publisher like '%$searchTerms%' 
    or modes like '%$searchTerms%' 
    or age_rating like '%$searchTerms%' 
    or price like '%$searchTerms%' 
    or console_name like '%$searchTerms%';";
?>   



<?php    
    $query = mysqli_query($dbConnection, $sql);
    if ($query)
    {
      // We have a result in some form
      echo $query->num_rows ." results found! <br>";
      if ($query->num_rows > 0)
      {
        echo "<div style=width:100%;clear:both;>";
        while ($result = mysqli_fetch_object($query))
        {
          ?>

              <figcaption class="results">
                  <?php
                  echo '<a href="game.php?id=' . $result->game_id . '">';
                  echo "<img width=25px height=25px src=\"assets/images/covers/" . $result->game_name . ".jpg\" class=game_boxes />";
                  echo $result->game_name . "<br>";
                  echo $result->price . "<br>";
                  echo $result->console_name . "<br>";
                  ?>
              </figcaption>

          <?php
        }
        echo "</div>";
      }
      else
      {
          echo "No results found";
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



<footer>
  <?php
  include ("footer.php");
  ?>
</footer>

