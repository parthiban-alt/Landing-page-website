<?php
 //echo "test show";
 $name = isset($_POST['name']);
 $email = isset($_POST['email']);
 $subject = isset($_POST['subject']);
 $message = isset($_POST['message']);
 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

// Create connection
$con = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
echo "Connected successfully";

// $con=mysqli_connect("localhost","root","","employee");
$sql="INSERT INTO userdetail(user_name,user_email,user_subject,user_message) values('$name','$email','$subject','$message')";
$r=mysqli_query($con,$sql);
if($r)
{
    echo "User details added Successfully";
}
else{
    echo "User details not added";
}
?>