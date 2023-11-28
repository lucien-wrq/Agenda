<?php
// Récupérer les données du formulaire HTML
$titre = $_POST['title'];
$date = $_POST['date'];
$heureDebut = $_POST['start_date'];
$heureFin = $_POST['end_date'];
// Ajoutez d'autres champs selon les besoins (par exemple, lieu, description, etc.)

try {
    $db = new PDO('sqlite:BDD.db');
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Préparer la requête SQL
$sql = "INSERT INTO evenements (title, date, start_date, end_date) VALUES ('$titre', '$date', '$heureDebut', '$heureFin')";


$stmt->bindParam(':title', $titre, PDO::PARAM_STR);
$stmt->bindParam(':date', $date, PDO::PARAM_INT);
$stmt->bindParam(':start_date', $heureDebut, PDO::PARAM_INT);
$stmt->bindParam(':end_date', $heureFin, PDO::PARAM_INT);

// Exécuter la requête
if ($conn->query($sql) === TRUE) {
    echo "Événement créé avec succès";
} else {
    echo "Erreur : " . $sql . "<br>" . $conn->error;
}

// Fermer la connexion
$conn->close();
?>
