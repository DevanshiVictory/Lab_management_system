<?php
$mysqli = new mysqli('localhost', 'root', '', 'lab_management');

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
echo "Database connected successfully!";
?>