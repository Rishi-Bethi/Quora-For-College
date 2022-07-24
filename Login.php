<?php 

session_start();

if( isset($_SESSION['first_name'])){
    header("Location: profile.php");
}
	include("Connection.php");
	include("Functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
        //console.log("I am IN");
		//something was posted
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($email) && !empty($password) && !is_numeric($email))
		{

			//read from database
			$query = "select * from users where email = '$email' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				// if($result && mysqli_num_rows($result) > 0)
				// {
					$user_data = mysqli_fetch_assoc($result);
          // if(isset($user_data['password'])){
					if($user_data['password'] == $password)
					{
                $_SESSION['user_id'] = $user_data['user_id'];
                $_SESSION['first_name'] = $user_data['first_name'];
                $_SESSION['last_name'] = $user_data['last_name'];
                $_SESSION['roll_no'] = $user_data['roll_no'];
                $_SESSION['phone'] = $user_data['phone'];
                $_SESSION['email'] = $user_data['email'];
                $_SESSION['date'] = $user_data['date'];
                
						    header("Location:index.php");
						    die;
					}
        // }
        else{
        echo "<script>window.alert('Result Wrong');</script>";
        }
			}
			
		}else
		{
			echo "<script>window.alert('Wrong Username or Password Combination. Try Again');</script>";
		}
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="Navstyle.css">
    <!-- <style>
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
</style> -->
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
              <?php 
                if(! isset($_SESSION['first_name'])){
             ?>  
              <a href="Login.php"><li>Log In</li></a>
              <a href="signup.php"><li>Sign Up</li></a>
             <?php 
             }
             else{
               ?>
              <a href="profile.php"><li>Hi, <?php echo $_SESSION["first_name"];?></li></a>
              <a href="Logout.php"><li>Log Out</li></a>
              <?php
             }
             ?>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </nav>
        </div>
    </header>
    <div class="main">
    <!-- <header>
        <div class="container">
          <a href="index.php">
            <h1 class="logo">Quora For College</h1>
          </a>
    
          <nav>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="Login.php">Login</a></li>
              <li><a href="signup.php">signup</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </nav>
        </div>
    </header> -->

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
    <!-- <header>
        <div class="container">
          <a href="index.php">
            <h1 class="logo">Quora For College</h1>
          </a>
    
          <nav>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="Login.php">Login</a></li>
              <li><a href="signup.php">signup</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </nav>
        </div>
    </header> -->

                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="signup.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <!-- <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>

    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>