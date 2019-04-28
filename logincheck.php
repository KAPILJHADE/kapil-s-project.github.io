<?php 
  $name = $_REQUEST["Login"];
  $userpassword =$_REQUEST["Password"];
  echo $name;
  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT * FROM `student` WHERE username='".$name."' and password='".$userpassword."'";

eco $sql;

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo 'Thank you ' .$name;
   
}
else
{
    echo 'Sorry Your Login ID or Password is incorrect';
}
?>