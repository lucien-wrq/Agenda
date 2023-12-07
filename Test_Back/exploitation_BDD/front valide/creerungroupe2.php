<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="creerungroupe2.css" rel="stylesheet">

    <title>Créer un Groupe</title>

</head>
<body> 
    <form class="box" action="creation_teams.php" method="post">
    <h1 class="box-title">Créer un groupe</h1>

    <input type="text" class="box-input" id="label" name="label" placeholder="Nom du groupe" required />

    <input type="text" class="box-input2" id="description" name="description" placeholder="Description" required />

<input type="submit" name="submit" value="Créer le groupe" class="box-button" />
    </form>
</body>
</html>
