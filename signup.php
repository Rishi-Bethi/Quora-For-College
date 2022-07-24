<?php 
session_start();
include("Connection.php");
include("Functions.php");
// if( isset($_SESSION['user'])){
//     header("Location: profile.php");
// }
    

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$roll_no = $_POST['roll_no'];        
		$year = $_POST['year'];        
		$section = $_POST['section'];                
		$phone = $_POST['phone'];        
		$email = $_POST['email'];        
		$password = $_POST['password'];
		$re_pass = $_POST['re_pass'];

		if(!empty($first_name) && !empty($last_name) && !empty($Roll_no) && !empty($password) && !is_numeric($first_name) && !is_numeric($last_name))
		{

			//save to database
			$user_id = random_num(20);
            $query = "insert into Users(user_id,first_name,last_name,roll_no,year,section,phone,email,password) values ('$user_id','$first_name','$last_name','$roll_no','$year','$section','$phone','$email','$password')";

            // if(1){
			//     //$query = "insert into Users (user_id,first_name,last_name,roll_no,year,section,phone,email,password) values ('$user_id','$first_name','$last_name','$roll_no','$year','$section','$phone','$email','$password')";
            // }
            // else{
            //     echo "<script>window.alert('Not Inserted');</script>";
            //     header("Location: signup.php");
            //     }
			mysqli_query($con, $query);

			header("Location: Login.php");
			die;
		}else
		{
			function function_alert($message) {
      
                // Display the alert box 
                echo "<script>alert('$message');</script>";
            }
              
              
            // Function call
            function_alert("Please enter some valid info!!");
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
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
              <!-- <li><a href="Login.php">Login</a></li>
              <li><a href="signup.php">signup</a></li> -->
              <li><a href="ask.php">Ask Question</li></a></li>
              <a href="Login.php"><li>Log In</li></a>
              <a href="signup.php"><li>Sign Up</li></a>
              
              <li><a href="#">Contact</a></li>
            </ul>
          </nav>
        </div>
    </header>
    
    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form action='Login.php' method="POST" class="register-form" id="register-form">
                            
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="first_name" id="first_name" placeholder="First Name"/>
                            </div> 
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="last_name" id="last_name" placeholder="Last Name"/>
                            </div>          
                         
                           <br>
                            <div class="form-group">
                                <label for="Roll.no"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="roll_no" id="roll_no" placeholder="1602-XX-XXX-XXX"/>
                            </div>  
                            <div class="form-group">
                                <label for="Year"><i class="zmdi zmdi-account material-icons-name">Choose your Year:</i></label><br><br>
                                <select name="year" id="year">
                                    <option value="1st"><i>First</i></option>
                                    <option value="2nd"><i>Second</i></option>
                                    <option value="3rd"><i>Third</i></option>
                                    <option value="4th"><i>Fourth</i></option>
                                </select>
                            </div> 
                            <div class="form-group">
                                <label for="section"><i class="zmdi zmdi-account material-icons-name">Choose your Section:</i></label><br><br>
                                <select name="section" id="section">
                                    <option value="A"><i>A</i></option>
                                    <option value="B"><i>B</i></option>
                                    <option value="C"><i>C</i></option>
                                </select>
                            </div> 
                            <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="phone" name="phone" id="phone" placeholder=" Your phone.No"/>
                            </div>  
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            <!-- <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div> -->
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="Login.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
                </form>
            </div>
        </section>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>