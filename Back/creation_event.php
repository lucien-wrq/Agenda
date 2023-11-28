<?php
// Récupérer les données du formulaire HTML
$title = isset($_POST['title']) ? $_POST['title'] : '';
$date = isset($_POST['date']) ? $_POST['date'] : '';
$start_date = isset($_POST['start_date']) ? $_POST['start_date'] : '';
$end_date = isset($_POST['end_date']) ? $_POST['end_date'] : '';

try {
    $db = new PDO('sqlite:BDD.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set error mode to exception
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Préparer la requête SQL
$sql = "INSERT INTO Events (title, date) VALUES (:title, :date,)";
$sql = "INSERT INTO edit (start_date, end_date) VALUES (:start_date, :end_date)";
// Préparer la requête SQL avec PDO
$stmt = $db->prepare($sql);

// Binder les paramètres
$stmt->bindParam(':title', $title, PDO::PARAM_STR);
$stmt->bindParam(':date', $date, PDO::PARAM_STR);
$stmt->bindParam(':start_date', $start_date, PDO::PARAM_STR);
$stmt->bindParam(':end_date', $end_date, PDO::PARAM_STR);

// Exécuter la requête
try {
    $stmt->execute();
    echo "Enregistrement réussi";
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

// Fermer la connexion
$db = null;
?>
