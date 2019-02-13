<h1>Inscription</h1>
<?php

if (isset($_POST['maurice'])) {
    $nom = isset($_POST['nom']) ? $_POST['nom'] : "";
    $mail = isset($_POST['mail']) ? $_POST['mail'] : "";
    $mdp = isset($_POST['mdp']) ? $_POST['mdp'] : "";


    }

    else {
        require_once "frminscription.php";
}
