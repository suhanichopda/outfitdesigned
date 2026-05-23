<?php
$conn = new mysqli("localhost", "root", "", "outfit");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>