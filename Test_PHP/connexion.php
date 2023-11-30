<?php
$base_de_donnees = new SQLite3('chemin/vers/ma_base_de_donnees.db');
if (!$base_de_donnees) {
    die('La connexion à la base de données a échoué.');
}
?>