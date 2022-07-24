<?php 
session_start();

	include("Connection.php");
	include("Functions.php");
  
	$user_data = check_login($con);

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
    <style>
    body, html {
      height: 100%;
      margin: 0;
      /* The image used */
      background-image: url("Q1.png");

      /* Full height */
      height: 100%; 

      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
    </style>
</head>
<body>
<!-- <div class="bg"></div> -->
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
              <?php 
                if(!isset($_SESSION['user_id'])){
              ?>
              <li><a href="Login.php">Log In</a></li>
              <li><a href="signup.php">Sign Up</a></li>
              <?php
                  }
                  else{
              ?>
              <li><a href="profile.php">Hi, <?php echo $_SESSION["first_name"];?></a></li>
              <li><a href="Logout.php">Log Out</a></li>
              <?php
                  }
              ?>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </nav>
        </div>
      </header>
      <br> <br> 
     
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
