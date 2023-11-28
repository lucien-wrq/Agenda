<html>
<head>
    <title>Formulaire</title>
</head>
<body>
    <h2>Formulaire</h2>
    <form action="home.php" method="POST">
        <label for="nombre1">nombre 1: </label><br>
        <input type="int" id="nombre1" name="nombre1" value ="<?php $x?>"><br>
        <label for="nombre2">nombre 2: </label><br>
        <input type="int" id="nombre2" name="nombre2" value ="<?php $y?>"><br><br>
        <input type="submit" value="Soumettre" name="envoi">
    </form>
</body>
</html>
