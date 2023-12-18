<?php
// Commencer une nouvelle session ou reprendre une session existante
session_start();

if($_SESSION['user_role'] == 1){
    $role = "Utilisateur";
} else{
    $role = "Administrateur";
}
?>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>agenda</title>
        <link href="../css/user.css" rel="stylesheet">
</head>
<body>
<div class="user-info">
        <h2>Informations du compte utilisateur</h2>
        <div class="info">
            <p><strong>Nom:</strong> <?php echo ($_SESSION["user_firstname"]); ?> </p>
            <p><strong>Prénom:</strong> <?php echo ($_SESSION["user_lastname"]); ?> </p>
            <p><strong>Adresse e-mail:</strong> <?php echo ($_SESSION["user_email"]); ?> </p>
            <p><strong>Role :</strong> <?php echo ($role); ?> </p>
        </div>
        <a href="page_admin.php"><button class="button-19" role="button">Retour</button></a>
    </div>

</body>
</html>