<?php
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "Site";

$connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

if ($connexion->connect_error) {
    throw new Exception("La connexion à la base de données a échoué : " . $connexion->connect_error);
}

return $connexion;
?>
