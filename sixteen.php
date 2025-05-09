<?php
$file = fopen("sample.txt", "w") or die("Unable to open file!");
fwrite($file, "Hello, File Handling in PHP!\n");
fclose($file);

$file = fopen("sample.txt", "r") or die("Unable to open file!");
echo fread($file, filesize("sample.txt"));
fclose($file);
?>
