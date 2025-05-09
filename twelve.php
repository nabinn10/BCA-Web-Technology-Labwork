<?php
$conn = new mysqli("localhost", "root", "", "school");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$name = "John Doe";
$age = 21;
$course = "Computer Science";

$sql = "INSERT INTO students (name, age, course) VALUES ('$name', $age, '$course')";
if ($conn->query($sql) === TRUE) echo "Student inserted successfully";
else echo "Error: " . $conn->error;

$conn->close();
?>
