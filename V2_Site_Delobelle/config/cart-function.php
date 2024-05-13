<?php
session_start();
include('config/db.php');

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}

// Fonction pour afficher le contenu du panier
function displayCart() {
    global $conn;

    // Récupérer l'ID du client depuis la session
    $clientId = $_SESSION['clientID'];

    // Requête SQL pour récupérer les articles du panier de l'utilisateur
    $sql = "SELECT Panier.PanierID, Articles.Nom, Articles.Prix, Panier.Quantite
            FROM Panier
            INNER JOIN Articles ON Panier.ArticleID = Articles.ArticleID
            WHERE Panier.ClientID = $clientId";
    $result = $conn->query($sql);

    // Affichage du contenu du panier
    $total = 0;
    while ($row = $result->fetch_assoc()) {
        $subtotal = $row['Prix'] * $row['Quantite'];
        $total += $subtotal;
        ?>
        <tr>
            <td><a href="remove_from_cart.php?id=<?php echo $row['PanierID']; ?>"><i class="far fa-times-circle"></i></a></td>
            <td><?php echo $row['Nom']; ?></td>
            <td><?php echo $row['Prix']; ?>€</td>
            <td><input type="number" value="<?php echo $row['Quantite']; ?>" name="quantity[]" id=""></td>
            <td><?php echo $subtotal; ?>€</td>
        </tr>
        <?php
    }

    // Libérer le résultat
    $result->free();
}

// Supprimer un article du panier
if (isset($_GET['id'])) {
    $itemId = $_GET['id'];
    // Requête SQL pour supprimer l'article du panier
    $sql = "DELETE FROM Panier WHERE PanierID = $itemId";
    if ($conn->query($sql) === TRUE) {
        // Redirection vers la page du panier après la suppression
        header("Location: cart.php");
        exit;
    } else {
        echo "Erreur lors de la suppression de l'article du panier: " . $conn->error;
    }
}
?>
