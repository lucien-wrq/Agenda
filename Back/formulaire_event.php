<?php


?>

<body>
    <form action="creation_event.php" method="POST">

        <h2> Ajouter un event </h2>

        <p>
            <label> Titre </label>
            <input type="texte" name="Titre" value="<?php $name?>">
        </p>
        <p>
            <label> Date </label>
            <input type="texte" name="Vorname" value="<?php $vorname?>">
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