<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/ajouterunevent2.css" rel="stylesheet">
    <title>Ajouter un Événement</title>

</head>
<body>

    <form class="box" action="creation_event.php" method="post">

        <h1 class="box-title">Ajouter un événement</h1>

        <input type="text" class="box-input" id="label" name="label" placeholder="Titre de l'événement" required />

        <input type="text" class="box-input2" d="description" name="description" placeholder="Description" required />

        <label for="place">Choix du groupe :</label>
        <br><select name="id_team" id="id_team">
                <!-- PHP pour récupérer les labels et ID des événements depuis la base de données -->
                <?php
                try {
                    $db = new PDO('sqlite:BDD2.db');
                    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    // Récupération des labels et ID des événements depuis la base de données
                    $sql = "SELECT id_team, label FROM teams";
                    $stmt = $db->query($sql);
                    $teams = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    // Affichage des labels des événements dans le menu déroulant
                    foreach ($teams as $team) {
                        echo '<option value="' . $team['id_team'] . '">' . $team['label'] . '</option>';
                    }

                    $db = null;
                } catch (PDOException $e) {
                    die("Erreur de connexion : " . $e->getMessage());
                }
                ?>
            </select><br>

        <input type="text" class="box-input" id="place" name="place" placeholder="Lieu" required />

        <label for="eventStartDate">Date de Début :</label>
        <br><input type="datetime-local" id="start_date" name="start_date" required><br>

        <label for="eventEndDate">Date de Fin :</label>
        <br><input type="datetime-local" id="end_date" name="end_date" required>

        <input type="submit" name="submit" value="Valider" class="box-button" />
    </form>
</body>
</html>

