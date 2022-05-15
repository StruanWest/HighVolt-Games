<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HighVolt Login</title>


<?php
  include ("header.php");
?>


</head>

<body>

<div class="headers"> Login </div>

<form class="login" action="Logged_in.php" method="POST">
    Username<input type="text" name="Username" autocomplete="off" id="Username" size="50"><br>
    Password<input type="text" name="Password" autocomplete="off" id="Password" size="50"><br>
    
    <button type="submit">SEARCH</button>
</form >

<br>
<br>
<br>
<br>
<br>
<br>


</body>



<footer>
    <?php
      include ("footer.php");
    ?>
</footer>
</html>