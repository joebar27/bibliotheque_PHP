<?php ob_start(); ?>

<p>
    
</p>


<?php
$title = "Acceuil";
$underTitle = "Bienvenue sur l'application des Bibliothécaires";
$content = ob_get_clean();
require_once 'model/template.php';
