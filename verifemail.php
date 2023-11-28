<?php
// Fonction de validation d'une adresse e-mail
function validateEmail($email) {
    // Utilisation de filter_var avec FILTER_VALIDATE_EMAIL
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Exemple d'utilisation
$email = "exemple";

if (validateEmail($email)) {
    echo "L'adresse e-mail est valide.";
} else {
    echo "L'adresse e-mail n'est pas valide.";
}
?>