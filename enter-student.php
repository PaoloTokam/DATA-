<?php
require 'Connect.php';

$FirstName = $_POST["FirstName"];
$LastName = $_POST["LastName"];
$course = $_POST["course"];
$module = $_POST["module"];
$YOS = $_POST["YOS"];
echo "$FirstName"; 
echo "$LastName"; 
echo "$course";
echo "$module";
//$YOS = filter_input(INPUT_POST, "YearOfStudy", FILTER_VALIDATE_INT);

$sql = "INSERT INTO Student (FirstName, LastName, course, module, YOS) VALUES ('$FirstName', '$LastName', '$course', '$module', '$YOS')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
?>



