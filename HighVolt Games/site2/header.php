<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--LINK TO CSS-->
    <link rel="stylesheet" href="../style.css"> 
    
    <!--WHAT APPEARS ON THE TAB-->
    <title class>HighVolt Home</title>

</head>

    <!-- Start of the header -->
    <header class="header">
        <div class="inner">
            <div class="logo">
                <div>
                
                <!--LOGO-->
                <a href="index.php"><img src = "../assets/logo/logo.png"></a>
                </div>
            </div>
            
            <nav>


                    <!--SEARCH BAR-->
                    <form class="searchbar" action="results.php" method="POST">
                        <input type="text" name="search" autocomplete="off" id="search" size="50">
                        <a href="../site3/index.php">Search</a>
                    </form>

                    <br>
                    
                    <div class="buttons">
                            <!--NAVIGATION BUTTONS-->
                            <li><span><a href="index.php">HOME</a></span></li>
                            <li><span><a href="store.php">STORE</a></span></li>
                            <li><span><a href="aboutus.php">ABOUT US</a></span></li>
                            <li><span><a href="login.php">LOGIN</a></span></li>
                    </div>
            </nav>
        </div>
    </header>

</html>