<h1>Inscription</h1>
<?php

if (isset($_POST['maurice'])) {
    $nom = isset($_POST['nom']) ? $_POST['nom'] : "";
    $mail = isset($_POST['mail']) ? $_POST['mail'] : "";
    $mdp = isset($_POST['mdp']) ? $_POST['mdp'] : "";

    $erreurs = array();

    if (!(mb_strlen($nom) >= 2 && ctype_alpha($nom)))
        array_push($erreurs,"Veuillez saisir un nom correct.");

    if (!filter_var($mail, FILTER_VALIDATE_EMAIL))
        array_push($erreurs,"Veuillez saisir une adresse mail valide.");

    if (mb_strlen($mdp) <6)
        array_push( $erreurs,"Votre mot de passe doit comporter 6 caracteres minimum");

    echo "<pre>";
    print_r($erreurs);
    echo "</pre>";
}

else {
        require_once "frminscription.php";
}
