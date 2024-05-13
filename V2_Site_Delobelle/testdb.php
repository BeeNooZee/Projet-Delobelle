<?php
global $connexion;
include('config/db.php');

if ($connexion->connect_error) {
    echo "Failed to connect to the database: " . $connexion->connect_error;
} else {
    echo "Successfully connected to the database.";
}

$connexion->close();
?>