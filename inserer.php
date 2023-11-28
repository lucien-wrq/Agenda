<?php
// Chemin vers votre fichier de base de données SQLite
$databaseFile = 'BDD.db';

try {
    // Connexion à la base de données SQLite
    $db = new PDO("sqlite:$databaseFile");
    
    // Définition du mode d'erreur PDO pour lever des exceptions en cas d'erreur
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Exemple d'insertion de données dans la table "Employes"
    $Id_Users = 4;
    $name1 = 'John';
    $vorname = 'DOE';
    $email = 'johndoe@gmail.com';

    // Requête SQL d'insertion
    $query = "INSERT INTO Users (Id_Users, name1, vorname, email) VALUES (:Id_Users, :name1, :vorname, :email)";

    // Préparation de la requête
    $stmt = $db->prepare($query);

    // Liaison des valeurs avec les paramètres de la requête
    $stmt->bindParam(':Id_Users', $Id_Users, PDO::PARAM_INT);
    $stmt->bindParam(':name1', $name1, PDO::PARAM_STR);
    $stmt->bindParam(':vorname', $vorname, PDO::PARAM_INT);
    $stmt->bindParam(':email', $email, PDO::PARAM_INT);

    // Exécution de la requête
    $stmt->execute();

    // Fermeture de la connexion à la base de données
    $db = null;

    echo "Données insérées avec succès.";

} catch (PDOException $e) {
    echo "Erreur: " . $e->getMessage();
}
?>
