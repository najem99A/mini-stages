<?php
// Dans votre fichier autoload.php (ligne 2), remplacez __autoload par spl_autoload_register
spl_autoload_register(function ($nom_classe) {
    require_once $nom_classe . '.class.php';
});


?>