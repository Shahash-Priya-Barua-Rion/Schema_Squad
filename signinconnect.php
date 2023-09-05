<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lankabangla";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = $_POST["mail"];
    $pass = $_POST["pass"];
    
    // Connect to the database
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Check user credentials
    $sql = "SELECT * FROM users WHERE mail='$mail' AND pass='$pass'";
    $result = $conn->query($sql);
    
    if ($result->num_rows == 1) {
        $_SESSION["mail"] = $mail;
        header("Location: userdashboard.php");
    } else {
        echo "Invalid credentials. Please try again.";
    }
    
    $conn->close();
}
?>
