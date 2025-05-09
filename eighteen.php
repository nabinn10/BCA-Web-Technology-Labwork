<?php
// session.php
session_start();
$_SESSION["username"] = "student123";
echo "Session set.<br>";

// cookie.php
setcookie("user", "student123", time() + 3600); // 1 hour
echo "Cookie set.<br>";

// read.php
session_start();
echo "Session username: " . $_SESSION["username"] . "<br>";
echo "Cookie user: " . $_COOKIE["user"];
?>
