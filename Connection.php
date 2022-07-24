<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "QuoraForCollege";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if($con)
{
   // echo "Connected!!";
}
else
{
	die("failed to connect!");
}
?>