<?php
$servername = "127.0.0.1"; // Change from 'localhost' to '127.0.0.1'
$username = "root";
$password = "password"; 
$dbname = "crud_app";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully"; 
?>