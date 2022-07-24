<?php
    session_start();
    if(! isset($_SESSION['first_name']))
        header("Location: Login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quora For College</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="Navstyle.css">
</head>
<body>
    <header>
        <div class="container">
          <a href="index.php">
            <h1 class="logo">Quora For College</h1>
          </a>
    
          <nav>
            <ul>
              <!-- <li><a href="#">Home</a></li> -->
              <li><a href="#">About</a></li>
              <!-- <li><a href="Login.php">Login</a></li>
              <li><a href="signup.php">signup</a></li> -->
              <li><a href="ask.php">Ask Question</li></a></li>
               
              <li><a href="profile.php">Hi, <?php echo $_SESSION["first_name"];?></a></li>
              <li><a href="Logout.php">Log Out</a></li>
              
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </nav>
        </div>
      </header>
      <br> <br> 
     
      <div id="content">
      <center>
            <h1 id="hea"><?php echo "Welcome ".$_SESSION["first_name"]; ?></h1>
            <div class="clearfix">
                <div id="hea-det">
                    <p id="first"></p><p class="tit">Name: </p>
                    <p class="det"><?php echo $_SESSION["first_name"].' '.$_SESSION["last_name"]; ?></p><br>
                    <p id="first"></p><p class="tit">Email: </p>
                    <p class="det"><?php echo $_SESSION["email"]; ?></p><br>
                    <p id="first"></p><p class="tit">Join Date: </p>
                    <p class="det"><?php echo $_SESSION["date"]; ?></p>
                </div>
                <div id="pic"></div>
            </div>
        </center>
      </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>