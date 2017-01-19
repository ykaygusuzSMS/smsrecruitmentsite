<?php
$servername = "localhost";
$username = "root";
$password = "deal97-manic";
$dbname = "recruitment";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die($conn->connect_error);
}
$conn->close();
?>
