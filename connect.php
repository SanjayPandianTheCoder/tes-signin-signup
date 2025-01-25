<?php  
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbase = 'users';
$conn = mysqli($host, $user, $pass,$dbase);  
if($conn->connect_error)  
{  
  die('Could not connect: ' . $conn->connect_error);  
}  
echo 'Connected successfully';    
?>  