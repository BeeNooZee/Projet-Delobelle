<?php
global $connexion;
include('config/db.php');

$nom = $_GET['nom'];

$sql_check = "SELECT * FROM Panier WHERE nom = ?";
$stmt_check = $connexion->prepare($sql_check);
$stmt_check->bind_param("s", $nom);
$stmt_check->execute();
$result = $stmt_check->get_result();

if ($result->num_rows > 0) {
    $sql_update = "UPDATE Panier SET quantite = quantite - 1 WHERE nom = ?";
    $stmt_update = $connexion->prepare($sql_update);
    $stmt_update->bind_param("s", $nom);
    $stmt_update->execute();

    $sql_delete = "DELETE FROM Panier WHERE quantite = 0";
    $stmt_delete = $connexion->prepare($sql_delete);
    $stmt_delete->execute();
    $stmt_delete->close();
}

$stmt_check->close();
$stmt_update->close();
$connexion->close();

header('Location: cart.php');
?><?php
