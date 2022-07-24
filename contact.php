<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact US</title>
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
              <li><a href="index.php">Home</a></li>
              <li><a href="#">About</a></li>
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
                  
      </div>
            <div id="box-2">
                <div id="text">
                    <h1>Quora For College</h1>
                    <p style="line-height: 20px;">
                        <a href="mailto:rishibethi321@gmail.com">rishibethi321@gmail@gmail.com</a><br>
                        Contact: +91 8688258563<br>
                        Site By: <a href=#>https://rishi-bethi.in</a><br>
                        Social: <a href="https://github.com/Rishi-Bethi" >Github@Rishi-Bethi</a><br>
                        License: <a href=http://interrogate.herokuapp.com/LICENSE>MIT</a>
                    </p>
                </div>
            </div>
            
        </div>
</body>
</html>