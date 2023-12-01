<?php
    // Commencer une nouvelle session ou reprendre une session existante
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>

    <h2>Connexion </h2>

    <form action="formulaire_connexion.php" method="post">
        <label for="email">email :</label>
        <input type="email" id="email" name="email" required>

        <br>

        <label for="mdp">Mot de passe :</label>
        <input type="text" id="mdp" name="mdp" required>

        <br>

        <input type="submit" value="Check">
    </form>

</body>
</html>
