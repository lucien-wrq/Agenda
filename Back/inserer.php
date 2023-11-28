<?php
// Récupérer les données du formulaire HTML
$Id_Users = $_POST['Id'];
$name = $_POST['Name'];
$vorname = $_POST['Vorname'];
$email = $_POST['Email'];

// Ouvrir la connexion à la base de données SQLite
try {
    $db = new PDO('sqlite:BDD.db');
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Préparer la requête SQL
$sql = "INSERT INTO votre_table (id, prenom, nom, email) VALUES (:id, :prenom, :nom, :email)";

// Préparer la requête SQL avec PDO
$stmt = $db->prepare($sql);

// Binder les paramètres
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->bindParam(':prenom', $firstname, PDO::PARAM_STR);
$stmt->bindParam(':nom', $lastname, PDO::PARAM_STR);
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
