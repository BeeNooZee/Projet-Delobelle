<?php
include('config/db.php');

// Récupérer les données du formulaire
$Nom = $_POST['nom'];
$Email = $_POST['email'];
$MotDePasse = $_POST['mot_de_passe'];

// Connexion à la base de données
$connexion = new mysqli( $Nom, $MotDePasse, $Email);

// Vérifier la connexion
if ($connexion->connect_error) {
    die("La connexion a échoué : " . $connexion->connect_error);
}

// Requête SQL pour insérer les données dans la table "Clients"
$sql = "INSERT INTO Clients (Nom, Email, MotDePasse) VALUES ('$Nom', '$Email', '$MotDePasse')";

// Exécuter la requête SQL
if ($connexion->query($sql) === TRUE) {
    echo "Nouveau compte créé avec succès";
} else {
    echo "Erreur lors de la création du compte : " . $connexion->error;
}

// Fermer la connexion à la base de données
$connexion->close();
?>
