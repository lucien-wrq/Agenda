<?php

try {
    $db = new PDO('sqlite:BDD2.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set error mode to exception
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Vérifier si le formulaire de connexion a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Valider l'utilisateur dans la base de données
    $sql = "SELECT id_user, password, role_id FROM users WHERE email = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$email]);

    // Récupérer les résultats de la requête
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Vérifier le mot de passe
    if ($user && password_verify($password, $user['password'])) {
        // L'utilisateur est validé avec succès
        // Vous pouvez maintenant utiliser $user['id_user'] et $user['role_id'] dans votre logique de redirection
        if ($user['role_id'] == 1) {
            // Redirection pour l'utilisateur normal
            header("Location: page_utilisateur.php");
            exit();
        } elseif ($user['role_id'] == 2) {
            // Redirection pour l'administrateur
            header("Location: page_admin.php");
            exit();
        } else {
            // Cas où le rôle n'est ni 1 ni 2 (par exemple, gestion des erreurs)
            echo "Rôle non valide";
        }
    } else {
        // Échec de validation, par exemple mauvais email ou mot de passe
        echo "Échec de la connexion.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>

    <h2>Connexion</h2>

    <form action="formulaire_connexion.php" method="post">
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>

        <br>

        <label for="mdp">Mot de passe :</label>
        <input type="password" id="mdp" name="mdp" required>

        <br>

        <input type="submit" value="Check">
    </form>

</body>
</html>
