<?php
$servername = "localhost";
$username = "root";
$password = "deal97-manic";
$dbname = "recruitment";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully <br>";

$sql = "SELECT * FROM questions WHERE id<10";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - competency: " . $row["competency"]. " - subcategory:  " . $row["subcategory"]. " - question:  ". $row["question"]. " <br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
