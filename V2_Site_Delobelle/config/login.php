<?php
// Récupérer les données du formulaire de connexion
$email = $_POST['email'];
$password = $_POST['password'];

// Connexion à la base de données
$servername = "localhost";
$username = "votre_nom_utilisateur";
$password = "votre_mot_de_passe";
$dbname = "Site";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

// Préparer la requête SQL pour vérifier les informations de connexion
$sql = "SELECT * FROM Clients WHERE Email='$email' AND MotDePasse='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Authentification réussie, enregistrer les informations de connexion dans la session
    session_start();
    $_SESSION['email'] = $email;
    echo "Connexion réussie. Bienvenue, " . $email;
} else {
    // Authentification échouée
    echo "Identifiants incorrects. Veuillez réessayer.";
}

// Fermer la connexion à la base de données
$conn->close();
?>