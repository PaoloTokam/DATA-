<?php
require 'Connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("insert into test23(username, password) values(?, ?)");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
echo "success..";
$stmt->close();
$conn->close();

?>