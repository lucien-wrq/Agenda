<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/modifierunevent2.css" rel="stylesheet">
    <title>Modifier un Événement</title>
    
</head>
<body>

    <form class="box" action="modif_event.php" method="post">

        <h1 class="box-title">Modifier un événement</h1>

        <select name="id_event" id="id_event">
                    <!-- PHP pour récupérer les labels et ID des événements depuis la base de données -->
                    <?php
                    try {
                        $db = new PDO('sqlite:BDD2.db');
                        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        // Récupération des labels et ID des événements depuis la base de données
                        $sql = "SELECT id_event, label FROM events";
                        $stmt = $db->query($sql);
                        $events = $stmt->fetchAll(PDO::FETCH_ASSOC);

                        // Affichage des labels des événements dans le menu déroulant
                        foreach ($events as $event) {
                            echo '<option value="' . $event['id_event'] . '">' . $event['label'] . '</option>';
                        }

                        $db = null;
                    } catch (PDOException $e) {
                        die("Erreur de connexion : " . $e->getMessage());
                    }
                    ?>
        </select><br>

        <label for="eventName">Nom de l'Événement :</label>
        <input type="text" id="eventName" name="eventName" placeholder = "Nom " required><br>
        
        <label for="eventStartDate">Date de Début :</label>
        <br><input type="datetime-local" id="eventStartDate" name="eventStartDate" required><br>

        <label for="eventEndDate">Date de Fin :</label>
        <br><input type="datetime-local" id="eventEndDate" name="eventEndDate" required>

        <input type="submit" name="submit" value="Enregistrer les modifications" class="box-button" />
    
        </form>
</body>
</html>