<?php
$myfile = fopen("db.config", "r") or die("Unable to open file!");
$dbConfig=array();
// Output one line until end-of-file
while(!feof($myfile)) {
  $line=fgets($myfile);
  $dbConfig[]=$line;
}
fclose($myfile);
$servername = $dbConfig[0];
$username = $dbConfig[1];
$password = $dbConfig[2];
$dbname = $dbConfig[3];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die($conn->connect_error);
}
$sql = "SELECT * FROM questions";
$result = $conn->query($sql);
$rows=[]
while($row = $result->fetch_array($result))
{
    $rows[] = $row;
}
$conn->close();
?>
