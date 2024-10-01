<?php
$db_host = "localhost";
$db_user = "root";
$db_password = ""; // Update this line with your actual MySQL password if there is one
$db_name = "osms1_db";

// Create Connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check Connection
if($conn->connect_error) {
 die("connection failed: " . $conn->connect_error);
}
?>
