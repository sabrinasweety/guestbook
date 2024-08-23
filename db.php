<?php
$servername = "localhost"; // Database server name
$username = "root";        // Database username
$password = "";            // Database password
$dbname = "guestbook_db";  // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
