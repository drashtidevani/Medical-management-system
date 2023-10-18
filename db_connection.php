<?php 
$servername = "localhost";
$username = "root";
$password = "";

$mysqli = new mysqli($servername, $username, $password,"medical");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>