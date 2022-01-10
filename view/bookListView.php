<?php ob_start(); ?>


<h1>Liste des livres</h1>

<?php
$title = "Liste des livres";
$underTitle = "Voici la liste de tout les livres de votre bibliothèque";
$content= ob_get_clean();
require 'model/template.php';
