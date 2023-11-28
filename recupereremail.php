<?php
// Chemin vers votre fichier de base de données SQLite
$databaseFile = 'Back/BDD.db';

try {
    // Connexion à la base de données SQLite
    $db = new PDO("sqlite:$databaseFile");

    // Définition du mode d'erreur PDO pour lever des exceptions en cas d'erreur
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête SQL pour sélectionner toutes les lignes de la table Employes
    $query = "SELECT email FROM Users";

    // Exécution de la requête
    $result = $db->query($query);

    // Récupération des données sous forme de tableau associatif
    $email = $result->fetchAll(PDO::FETCH_ASSOC);

    // Affichage des données récupérées
    foreach ($email as $email) {
        echo "Email: {$email['email']}";
    }

    // Fermeture de la connexion à la base de données
    $db = null;

} catch (PDOException $e) {
    echo "Erreur: " . $e->getMessage();
}
?>
