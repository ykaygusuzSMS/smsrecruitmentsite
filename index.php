<?php
$myfile = fopen("db.config", "r") or die("Unable to open file!");
$dbConfig=array();
// Output one line until end-of-file
while(!feof($myfile)) {
  $line=fgets($myfile);
  $dbConfig[]=$line;
  echo $line . "<br>";
}
fclose($myfile);
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
