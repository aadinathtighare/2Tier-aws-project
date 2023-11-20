<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$mysqli = new mysqli('adinath-rds.cc6uyqrm3kju.ap-south-1.rds.amazonaws.com', 'adiuser', 'admin1234', 'adidatabase');
if ($mysqli->connect_errno) {
    die('Failed to connect to MySQL: ' . $mysqli->connect_error);
}

$query = "INSERT INTO customers (name, email, phone) VALUES ('$name', '$email', '$phone')";
if (!$result = $mysqli->query($query)) {
    die('Error executing query: ' . $mysqli->error);
}

$mysqli->close();

echo 'Customer information saved successfully!';
?>
