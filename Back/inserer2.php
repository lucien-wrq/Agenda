<?php
// Chemin vers votre fichier de base de données SQLite
$databaseFile = 'BDD.db';

try {
    // Connexion à la base de données SQLite
    $db = new PDO("sqlite:$databaseFile");
    
    // Définition du mode d'erreur PDO pour lever des exceptions en cas d'erreur
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Exemple d'insertion de données dans la table "Employes"
    $nom = 'Doe';
    $prenom = 'John';
    $age = 30;
    $salaire = 50000;

    // Requête SQL d'insertion
    $query = "INSERT INTO Employes (nom, prenom, age, salaire) VALUES (:nom, :prenom, :age, :salaire)";

    // Préparation de la requête
    $stmt = $db->prepare($query);

    // Liaison des valeurs avec les paramètres de la requête
    $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
    $stmt->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    $stmt->bindParam(':age', $age, PDO::PARAM_INT);
    $stmt->bindParam(':salaire', $salaire, PDO::PARAM_INT);

    // Exécution de la requête
    $stmt->execute();

    // Fermeture de la connexion à la base de données
    $db = null;

    echo "Données insérées avec succès.";

} catch (PDOException $e) {
    echo "Erreur: " . $e->getMessage();
}
?>
