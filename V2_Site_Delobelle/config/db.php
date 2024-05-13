<?php
$serveur = "192.168.1.42";
$utilisateur = "root";
$mot_de_passe = "19012004";
$base_de_donnees = "Louis";

$connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

if ($connexion->connect_error) {
    throw new Exception("La connexion à la base de données a échoué : " . $connexion->connect_error);
}

return $connexion;
?>