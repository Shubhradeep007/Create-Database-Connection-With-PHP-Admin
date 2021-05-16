<?php
$servername = "Server name";//For local host this is -> "Localhost";
$username = "Your Usename";// For local host this is -> "root";
$password = "your pass"; // For local host this nis null like -> "";
$database = "Name of the Database Which you want to connect";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    // echo "Connection was successful<br>";
}


?>
