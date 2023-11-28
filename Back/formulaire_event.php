<?php


?>

<body>
    <form action="creation_event.php" method="POST">

        <h2> Ajouter un event </h2>

        <p>
            <label> Titre </label>
            <input type="texte" name="Titre" value="<?php $titre?>">
        </p>
        <p>
        <label for="date">Sélectionnez une date :</label>
        <input type="date" name="date" required value="<?php $date?>">
        </p>
        <p>
            <label> Email </label>
            <input type="texte" name="Email" value="<?php $email?>">
        </p>
        <p> 
            <input type="submit" value="Valider" name="Valider">
        </p>

    </form>
</body>