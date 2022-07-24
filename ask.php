<?php
    session_start();
    include("Connection.php");
	include("Functions.php");
    if(!isset($_SESSION['first_name']))
        header("location: Login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ask a Question</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="Navstyle.css">
</head>
<body id="ask">
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
              <a href="profile.php"><li>Hi, <?php echo $_SESSION['first_name'] ?></li></a>
              <a href="Logout.php"><li>Log Out</li></a>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </nav>
        </div>
      </header>

         
</body>
</html>