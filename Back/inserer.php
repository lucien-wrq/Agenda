<?php
// Chemin vers votre fichier de base de données SQLite
$databaseFile = 'BDD.db';

try {
    // Connexion à la base de données SQLite
    $db = new PDO("sqlite:$databaseFile");
    
    // Définition du mode d'erreur PDO pour lever des exceptions en cas d'erreur
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Exemple d'insertion de données dans la table "Employes"
    if(isset($_POST['Valider'])){
        $Id_Users = $_POST["Id"];
        $name = $_POST["Name"];
        $vorname = $_POST["Vorname"];
        $email = $_POST["Email"];
    }

    // Requête SQL d'insertion
    $query = "INSERT INTO Users (Id_Users, name, vorname, email) VALUES (:Id_Users, :name, :vorname, :email)";

    // Préparation de la requête
    $stmt = $db->prepare($query);

    // Liaison des valeurs avec les paramètres de la requête
    $stmt->bindParam(':Id_Users', $Id_Users, PDO::PARAM_INT);
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':vorname', $vorname, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);

    // Exécution de la requête
    $stmt->execute();

    // Fermeture de la connexion à la base de données
    $db = null;

    echo "Données insérées avec succès.";

} catch (PDOException $e) {
    echo "Erreur: " . $e->getMessage();
}
?>

<?php
// Récupérer les données du formulaire HTML
$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];

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
