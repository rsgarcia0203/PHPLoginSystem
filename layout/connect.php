<?php
$servername = "localhost";
$database = "mercado";
$username = "root";
$password = "";
// Create connection
try {
    $conn = mysqli_connect($servername, $username, $password, $database);
    //echo "Connected successfully";
} catch (mysqli_sql_exception $mysqle) {
    die("Connection failed: " . mysqli_connect_error());
}   

//mysqli_close($conn);
?>