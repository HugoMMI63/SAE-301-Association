<?php
require("../config/config.php");
require("../classes/Animateur.php");

$valide = true;

$attributs = ["nom", "prenom", "age", "telephone", "description", "photo"];

foreach ($attributs as $attribut) {
    if (isset($_POST[$attribut]) == false) {
        $valide = false;
        break;
    }
}

if ($valide == true) {
    $animateur = new Animateur(
        null,
        $_POST["nom"],
        $_POST["prenom"],
        $_POST["age"],
        $_POST["telephone"],
        $_POST["description"],
        $_POST["photo"]
    );
    
    $animateur->ajouterBDD();
}
else {
    header("Location: ../redirection.php");
    exit();
}
?>