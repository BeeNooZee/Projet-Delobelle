<?php

// Vérifier si l'article ID est passé en tant que paramètre
if (isset($_GET['article_id'])) {
    $articleID = $_GET['article_id'];

    // Vérifier si l'article existe dans la base de données
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

    // Préparer la requête SQL pour récupérer les détails de l'article
    $sql = "SELECT * FROM Articles WHERE ArticleID = $articleID";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // L'article existe, ajouter l'article au panier

        // Récupérer les détails de l'article
        $row = $result->fetch_assoc();
        $articleNom = $row['Nom'];
        $articlePrix = $row['Prix'];

        // Ajouter l'article au panier (session)
        if (!isset($_SESSION['panier'])) {
            $_SESSION['panier'] = array();
        }

        // Vérifier si l'article est déjà dans le panier
        if (isset($_SESSION['panier'][$articleID])) {
            // L'article est déjà dans le panier, augmenter la quantité
            $_SESSION['panier'][$articleID]['quantite']++;
        } else {
            // L'article n'est pas encore dans le panier, l'ajouter avec une quantité de 1
            $_SESSION['panier'][$articleID] = array(
                'nom' => $articleNom,
                'prix' => $articlePrix,
                'quantite' => 1
            );
        }

        echo "L'article a été ajouté au panier avec succès.";
    } else {
        echo "L'article n'existe pas.";
    }

    // Fermer la connexion à la base de données
    $conn->close();
} else {
    echo "Paramètre d'article manquant.";
}
?>