<?php
    // Commencer une nouvelle session ou reprendre une session existante
    session_start();
?>

<html>
    <body>
    
        <?php 
        echo ("session ". $_SESSION["email"]) . " bienvenu dans ta session";
        ?>");
        ?>

    </body>
</html>