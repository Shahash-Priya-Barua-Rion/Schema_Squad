<?php
// Replace with your database connection details

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lankabangla";
$randomNumber = mt_rand(1000000000000, 9999999999999);



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $ah_name = $_POST["ah_name"];
    $ah_fh_name = $_POST["ah_fh_name"];
    $ah_m_name = $_POST["ah_m_name"];
    $ah_sp_name = $_POST["ah_sp_name"];




    $ah_phone_number = $_POST["ah_phone_number"];
    $ah_fax = $_POST["ah_fax"];
    $ah_email = $_POST["ah_email"];
    $ah_etin = $_POST["ah_etin"];
    $ah_nid = $_POST["ah_nid"];
    $ah_birthrege = $_POST["ah_birthrege"];
    $ah_ocupation = $_POST["ah_ocupation"];
    $ah_date = $_POST["ah_date"];
    $ah_gender = $_POST["ah_gender"];
    $ah_nationality = $_POST["ah_nationality"];
    $ah_date = $_POST["ah_date"];



    // Insert data into the database
    $sql1 = "INSERT INTO firstapplicantinformation (bio,ah_name,ah_fh_name,ah_m_name,ah_sp_name)
    VALUES ('$randomNumber ','$ah_name', '$ah_fh_name', '$ah_m_name','$ah_sp_name')";

    $sql2 = "INSERT INTO contactinformation ( ah_phone_number, ah_fax, ah_email,ah_etin, ah_nid,ah_birthrege,ah_ocupation)
    VALUES ('$ah_phone_number','$ah_fax', '$ah_email','$ah_etin', '$ah_nid','$ah_birthrege','$ah_ocupation')";
 



 
    if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
        echo "Form data inserted successfully.";
    } else {
        echo "Error: " . $sql1 . "<br>" . $conn->error;
        echo "Error: " . $sql2 . "<br>" . $conn->error;
        echo "Error: " . $sql3 . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
