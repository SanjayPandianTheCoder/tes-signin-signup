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
    $pwd = $_POST["password"];


    $query = "SELECT password from usertable where username='$uusername'";
    $result = $conn->query($query);
    if($result->num_rows>0){
        $p = $result->fetch_assoc();
        if($p["password"] == $pwd){
            echo "Login Success";
        }
        else{
            echo "Login unsucess";
        }
    }
    else {
        echo "\nLogin failed";
    }
}

$conn->close();
?>
