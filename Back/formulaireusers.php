<body>
    <form action="insererusers.php" method="POST">

        <h2> S'inscrire </h2>

        <p>
            <label> Name </label>
            <input type="texte" name="Name" value="<?= $name?>">
        </p>
        <p>
            <label> Vorname </label>
            <input type="texte" name="Vorname" value="<?= $vorname?>">
        </p>
        <p>
            <label> Email </label>
            <input type="email" name="Email" value="<?= $email?>">
        </p>
        <p> 
            <input type="submit" value="Valider" name="Valider">
        </p>

    </form>
</body>