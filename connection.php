<?php


$servername = "localhost";  // Usually 'localhost'
$username = "root";         // Default username
$password = "yourpassword"; // XAMPP or Ubuntu par aksar blank hota hai
$dbname = "practice"; //  apna database name likho yahan 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

 
// Check connection
if ($conn->connect_error) {
    die(" Connection failed: " . $conn->connect_error);
}

// $conn->close();
?>
