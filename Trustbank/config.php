<?php
$servername = "localhost";
$username = "root";
$password = "";
$Database = "online banking";
// Create connection

$conn = new mysqli($servername, $username, $password,$Database);
// Check connection


if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";//see if the db connedctd

?>