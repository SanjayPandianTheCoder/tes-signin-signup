<?php
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbase = 'users';
$conn = new mysqli($host, $user, $pass, $dbase);  

if ($conn->connect_error) {  
    die('Could not connect: ' . $conn->connect_error);  
}  

echo "Successful connection.";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uusername = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["password"];


    $query = "INSERT INTO usertable(username, email, password) VALUES('$uusername','$email','$pwd')";

    if ($conn->query($query)) {
        echo "\nRegistration Successful";
    } else {
        echo "\nRegistration Unsuccessful";
    }
}

$conn->close();
?>
