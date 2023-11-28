<?php


?>

<body>
    <form action="formulaire.php" method="POST">

        <h2> S'inscrire </h2>

        <p>
            <label> Id </label> 
            <input type="number" name="Id"  value="<?php $Id_Users?>">
            
        </p>

        <p>
            <label> Name </label>
            <input type="texte" name="Name" value="<?php $name?>">
        </p>
        <p>
            <label> Vorname </label>
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