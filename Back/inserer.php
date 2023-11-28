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
$query = "INSERT INTO Users ($Id_Users, $name, $vorname,email) VALUES (:Id_Users, :name, :vorname, :email)";

// Préparer la requête SQL avec PDO
$stmt = $db->prepare($query);


// Binder les paramètres
$stmt->bindParam(':Id_Users', $Id_Users, PDO::PARAM_INT);
$stmt->bindParam(':name', $name, PDO::PARAM_STR);
$stmt->bindParam(':vorname', $vorname, PDO::PARAM_STR);
$stmt->bindParam(':email', $email, PDO::PARAM_STR);
echo $email;
// Exécuter la requête
if ($stmt->execute()) {
    echo "Enregistrement réussi";
    echo $email;
} else {
    echo "Erreur : " . print_r($stmt->errorInfo(), true);
    echo $email;
}

// Fermer la connexion
$db = null;
echo $email;
?>
