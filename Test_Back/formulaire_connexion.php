<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "agenda";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["email"];
    $fullname = $_POST["mdp"];

    $sql = "SELECT * FROM `Users` WHERE `email` = ? AND `password` = ?";
    $stmt = $conn->prepare($sql);
    
    if ($stmt === false) {
        die("Error in preparing statement: " . $conn->error);
    }
    
    $stmt->bind_param("ss", $username, $fullname);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Rediriger vers une page existante (remplacez "page_existante.html" par le chemin réel de votre page)
        // header("Location: QUELQUEPART.html");
        echo "c'est OK";
        exit();  // Assurez-vous de terminer l'exécution du script après la redirection
    } else {
        // Rediriger vers une autre page (remplacez "page_inexistante.html" par le chemin réel de votre page)
        echo "Les informations n'existent pas dans la base de données.";
    }
    
    $stmt->close();
}

$conn->close();
?>
