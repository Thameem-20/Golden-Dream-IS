<?php

$conn = new mysqli("localhost", "root","", "gd-gold");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
