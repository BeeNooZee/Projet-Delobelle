<?php
global $connexion;
include('config/db.php');

$nom = $_POST['nom'];
$prix = $_POST['prix'];


$sql_check = "SELECT * FROM Panier WHERE nom = ?";
$stmt_check = $connexion->prepare($sql_check);
$stmt_check->bind_param("s", $nom);
$stmt_check->execute();
$result = $stmt_check->get_result();

if ($result->num_rows > 0) {
    $sql_update = "UPDATE Panier SET quantite = quantite + 1, prix = prix + ? WHERE nom = ?";
    $stmt_update = $connexion->prepare($sql_update);
    $stmt_update->bind_param("ds", $prix, $nom);
    $stmt_update->execute();
    $stmt_update->close();
} else {
    $sql_insert = "INSERT INTO Panier (nom, prix, quantite) VALUES (?, ?, 1)";
    $stmt_insert = $connexion->prepare($sql_insert);
    $stmt_insert->bind_param("sd", $nom, $prix);
    $stmt_insert->execute();
    $stmt_insert->close();
}

$stmt_check->close();
$connexion->close();

header('Location: shop.php');
?>