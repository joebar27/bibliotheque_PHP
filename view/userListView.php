<?php ob_start(); ?>


<h1>Liste des Utilisateurs</h1>

<?php
$content= ob_get_clean();
require 'model/template.php';
