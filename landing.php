<?php
echo "test show";
$n=$_POST['name'];
$e=$_POST['email'];
$s=$_POST['subject'];
$m=$_POST['message'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact";

// Create connection
$con= new mysqli ($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
echo "Connected successfully";


$sql = "INSERT INTO details(User_Name,User_Email,User_Subject,User_Message) values('$n','$e','$s','$m')";


$r=mysqli_query($con,$sql);
if($r)
{
    echo "Employee details added Successfully";
}
else{
    echo "Employee details not added";
}

?>