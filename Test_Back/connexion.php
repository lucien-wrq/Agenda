<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "agenda";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

$sql = "SELECT * From users";
$result = $conn->query($sql);

$conn->close();
?>