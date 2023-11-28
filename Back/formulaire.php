<?php


?>

<body>
    <form action="formulaire.php" method="POST">

        <h2> S'inscrire </h2>

        <p>
            <label> Titre: </label> 
            <input type="text" name="Titre"  value="">
            <label> Année: </label>
            <input type="number" name="Anne">
        </p>

        <p>
            <label for="tdc">Comédie: </label>
            <input type="checkbox" id="tdc">

            <label for="tdc">Drame: </label>
            <input type="checkbox" id="tdc">
            
            <label for="tdc">Histoire: </label>
            <input type="checkbox" id="tdc">

        </p>
        <label >Résumé: </label>
        <textarea placeholder="mots clés du résumé"></textarea>

        <p>
            <label >Metteur en scéne: </label>
            <select>
                <option selected>Quentin Tarantino</option>
                <option>Pub</option>
                <option>On vous en a parlé</option>
            </select>   
        </p>

        <label >Votre choix ? </label>

        <p> 
            <input type="submit" value="Rechercher" name="bouton1">
            <input type="submit" value="Annuler" name="bouton2">
        </p>

    </form>
</body>