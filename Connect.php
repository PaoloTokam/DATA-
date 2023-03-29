<?php

$serverName = "ysjcs.net";
$dbuserName ="paolo.tokam";
$dbpassword ="D6PJTUCY";
$dbName ="paolotokam_database";

// Create connection
$conn = mysqli_connect($serverName ,$dbuserName ,$dbpassword, $dbName);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>

