<?php

// Récupérer les données du formulaire HTML
$name = $_POST['Name'];
$vorname = $_POST['Vorname'];

// Fonction de validation d'une adresse e-mail
function validateEmail($email) {
    // Utilisation de filter_var avec FILTER_VALIDATE_EMAIL
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

if (validateEmail($_POST['Email'])) {
    $email = $_POST['Email'];
} else {
    echo "L'adresse e-mail n'est pas valide.";
    exit();
}

// Ouvrir la connexion à la base de données SQLite
try {
    $db = new PDO('sqlite:BDD.db');
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Préparer la requête SQL
$sql = "INSERT INTO Users (name, vorname, email) VALUES (:name, :vorname, :email)";

// Préparer la requête SQL avec PDO
$stmt = $db->prepare($sql);

// Binder les paramètres
$stmt->bindParam(':name', $name, PDO::PARAM_STR);
$stmt->bindParam(':vorname', $vorname, PDO::PARAM_STR);
$stmt->bindParam(':email', $email, PDO::PARAM_STR);

// Exécuter la requête
if ($stmt->execute()) {
    echo "Enregistrement réussi";

} else {
    echo "Erreur : " . print_r($stmt->errorInfo(), true);

}

// Fermer la connexion
$db = null;

?>
