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
        <label> Plage Horaire </label>
        <label for="heure_debut">Heure de début :</label>
        <input type="time" id="heure_debut" name="heure_debut" required>

        <label for="heure_fin">Heure de fin :</label>
        <input type="time" id="heure_fin" name="heure_fin" required>
        <p> 
            <input type="submit" value="Valider" name="Valider">
        </p>

    </form>
</body>