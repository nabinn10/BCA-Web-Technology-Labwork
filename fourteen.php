<?php
$conn = new mysqli("localhost", "root", "", "school");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$id = $_POST['id'];
$name = $_POST['name'];
$roll = $_POST['roll'];
$dept = $_POST['department'];

$sql = "UPDATE students SET name='$name', roll='$roll', department='$dept' WHERE id=$id";
if ($conn->query($sql)) echo "Student updated successfully";
else echo "Error: " . $conn->error;

$conn->close();
?>
