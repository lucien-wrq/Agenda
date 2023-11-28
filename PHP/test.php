

<?php
include 'connexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titre = $_POST['titre'];
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin'];

    $requete = "INSERT INTO evenements (titre, date_debut, date_fin) VALUES ('$titre', '$date_debut', '$date_fin')";

    if ($connexion->query($requete) === TRUE) {
        echo "Événement ajouté avec succès.";
    } else {
        echo "Erreur : " . $requete . "<br>" . $connexion->error;
    }
}
?>


<form method="post" action="ajout_evenement.php">
    Titre: <input type="text" name="titre"><br>
    Date de début: <input type="datetime-local" name="date_debut"><br>
    Date de fin: <input type="datetime-local" name="date_fin"><br>
    <input type="submit" value="Ajouter événement">
</form>



<?php
include 'connexion.php';

$requete = "SELECT * FROM evenements";
$resultat = $connexion->query($requete);

if ($resultat->num_rows > 0) {
    while ($row = $resultat->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Titre: " . $row["titre"] . " - Début: " . $row["date_debut"] . " - Fin: " . $row["date_fin"] . "<br>";
    }
} else {
    echo "Aucun événement trouvé.";
}

$connexion->close();
?>