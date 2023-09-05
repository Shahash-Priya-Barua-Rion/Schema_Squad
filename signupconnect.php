<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lankabangla";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Connect to the database
    $conn = new mysqli("localhost", "root", "", "lankabangla");
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Insert user into the database
    $sql = "INSERT INTO users (name, pass, mail)
    VALUES ('$name', '$pass', '$mail')";
    
    if ($conn->query($sql) === TRUE) {
        $_SESSION["name"] = $name;
        header("Location: userdashboard.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>
