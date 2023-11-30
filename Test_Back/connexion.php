<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "agenda";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

$sql = "SELECT * From users";

// Préparer la requête SQL avec PDO
$stmt = $db->prepare($sql);
$stmt->execute();

$conn->close();
?>