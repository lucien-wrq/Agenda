<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="modifierungroupe2.css" rel="stylesheet">
    <title>Modifier un Groupe</title>
</head>
<body>
    <form class="box" action="modif_teams.php" method="post">
        <h1 class="box-title">Modifier un groupe </h1>
        <select class="box-input" name="id_team" id="id_team" placeholder="Nom du groupe" required />
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
    <input type="text" class="box-input2" id="label" name="label" placeholder="Nom du groupe" required />

    <input type="text" class="box-input2" name="description" placeholder="Description" required />


<input type="submit" name="submit" value="Enregistrer les modifications" class="box-button" />
    </form>
</body>
</html>
