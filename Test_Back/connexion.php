<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "agenda";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Users";
$result = $conn->query($sql);

if ($result) {

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id_user"] . " - Nom: " . $row["lastname"] . " - Prenom: " . $row["firstname"] .  " - email: " . $row["email"];
            // You can customize the output based on your table columns
        }
    } else {
        echo "No records found";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
