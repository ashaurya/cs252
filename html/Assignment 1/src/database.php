<?php
$servername = 'localhost';
$username = 'root';
$password = 'toor';
$database = 'ass1db';

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

?>
