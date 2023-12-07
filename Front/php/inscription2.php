<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/inscription2.css" rel="stylesheet">
    <title>Inscription</title>
</head>
<body>
    <form class="box" action="../../Back/BDD/exploitation_BDD/insererusers.php" method="post">

        <h1 class="box-title">S'inscrire</h1>

        <input type="text" class="box-input" id="firstName" name="firstname" placeholder="Prénom" required />
        
        <input type="text" class="box-input" id="lastName" name="lastname" placeholder="Nom" required />

        <input type="text" id="email" class="box-input" name="email" placeholder="Email" required />

        <input type="password" class="box-input" name="password" id="password" placeholder="Mot de passe" required />

        <label for="role">Choisir une option :</label>
                <select id="role" name="role">
                    <option value="2">Admin</option>
                    <option value="1">Utilisateur</option>
                </select><br>
        <label for="group">Choisir un groupe :</label>
        <select id="group" name="group">

        <?php

            try {
                $db = new PDO('sqlite:../../Back/BDD/BDD2.db');
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            // Récupération des ID des événements depuis la base de données
                $sql = "SELECT id_team, label FROM teams";
                $stmt = $db->query($sql);
                $teams = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
            // Affichage des ID des événements dans le menu déroulant
                foreach ($teams as $row) {
                    echo "<option value='" . $row["id_team"] . "'>" . $row["label"] . "</option>";
                }
        
                $db = null;
            } catch (PDOException $e) {
                die("Erreur de connexion : " . $e->getMessage());
            }   
        ?>

        </select><br>
        
        <input type="submit" name="submit" value="S'inscrire" class="box-button" />
    </form>
</body>
</html>