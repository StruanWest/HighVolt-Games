<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--WHAT APPEARS ON THE TAB-->
    <title>HighVolt Home</title>

    <!--INCLUDE HEADER PAGE-->
<head>
  <?php
  include ("header.php");
  ?> 
</head>

<?php

  $dbConnection = mysqli_connect("comp-server.uhi.ac.uk","18005704", "stu4nw","AR18005704"); //Connect to MyWebSQL
  if ($dbConnection) //if the connectiong is successful, then...
  {

    //Code being sent to MyWebSQL

    $sql = "Select * from HVGames

    where
    best_seller = 'YES' 
    new_release = 'YES';";

    $query = mysqli_query($dbConnection, $sql);
    if ($query)
    {
      // If we have a result then...
      echo $query->num_rows ." results found! <br>"; //read out number of rows
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


 <body>


<!--CAROUSEL-->

<div class="slideshow-container">
  
        <!--IMAGE 1-->
    <div class="mySlides fade">
      <div class="numbertext">1 / 5</div>
      <img src="../assets/images/banners/1.jpg" style="width:100%">
      <div class="text">Horizon 2: Forbidden West</div>
    </div>

        <!--IMAGE 2-->
    <div class="mySlides fade">
      <div class="numbertext">2 / 5</div>
      <img src="../assets/images/banners/2.jpg" style="width:100%">
      <div class="text">Pokemon Legends: Arceus</div>
    </div>

        <!--IMAGE 3-->
    <div class="mySlides fade">
      <div class="numbertext">3 / 5</div>
      <img src="../assets/images/banners/3.jpg" style="width:100%">
      <div class="text">Call of Duty: Vanguard</div>
    </div>

        <!--IMAGE 4-->
    <div class="mySlides fade">
      <div class="numbertext">4 / 5</div>
      <img src="../assets/images/banners/4.jpg" style="width:100%">
      <div class="text">Dying Light 2: Stay Human</div>
    </div>

        <!--IMAGE 5-->
    <div class="mySlides fade">
      <div class="numbertext">5 / 5</div>
      <img src="../assets/images/banners/5.jpg" style="width:100%">
      <div class="text">Elden Ring</div>
    </div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>



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
                  echo "<img width=25px height=25px src=\"../assets/images/covers/" . $result->game_name . ".jpg\" class=game_boxes />"; //SHOW GAME BOX
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
                    echo "<img width=25px height=25px src=\"../assets/images/covers/" . $result->game_name . ".jpg\" class=game_boxes />"; //SHOW GAME BOX
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

</html>