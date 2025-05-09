<?php
$conn = new mysqli("localhost", "root", "", "school");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$result = $conn->query("SELECT * FROM students");

echo "<table border='1'><tr><th>Name</th><th>Roll</th><th>Department</th></tr>";
while($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['roll']}</td><td>{$row['department']}</td></tr>";
}
echo "</table>";

$conn->close();
?>
