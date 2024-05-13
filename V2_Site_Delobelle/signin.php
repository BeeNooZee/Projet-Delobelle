<?php
session_start();
include('config/db.php');

// Définir les variables et les initialiser avec des valeurs vides
$email = $password = '';
$email_err = $password_err = '';

// Traitement du formulaire lors de la soumission
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Valider l'email
    if (empty(trim($_POST['email']))) {
        $email_err = 'Veuillez entrer votre email.';
    } else {
        $email = trim($_POST['email']);
    }

    // Valider le mot de passe
    if (empty(trim($_POST['mot_de_passe']))) {
        $password_err = 'Veuillez entrer votre mot de passe.';
    } else {
        $password = trim($_POST['mot_de_passe']);
    }

    // Vérifier s'il n'y a pas d'erreur de saisie avant de poursuivre
    if (empty($email_err) && empty($password_err)) {
        // Préparer une requête SELECT
        $sql = "SELECT ClientID, Email, MotDePasse FROM Clients WHERE Email = ?";

        if ($stmt = $pdo->prepare($sql)) {
            // Liaison des variables à la déclaration préparée en tant que paramètres
            $stmt->bindParam(1, $param_email, PDO::PARAM_STR);

            // Définir les paramètres
            $param_email = $email;

            // Tentative d'exécution de la déclaration préparée
            if ($stmt->execute()) {
                // Vérifier si l'email existe, si oui, vérifier le mot de passe
                if ($stmt->rowCount() == 1) {
                    if ($row = $stmt->fetch()) {
                        $id = $row['ClientID'];
                        $email = $row['Email'];
                        $hashed_password = $row['MotDePasse'];
                        if (password_verify($password, $hashed_password)) {
                            // Démarrer une nouvelle session
                            session_start();

                            // Stocker les données dans des variables de session
                            $_SESSION['loggedin'] = true;
                            $_SESSION['ClientID'] = $id;
                            $_SESSION['email'] = $email;

                            // Rediriger l'utilisateur vers la page d'accueil
                            header('location: index.php');
                        } else {
                            // Afficher un message d'erreur si le mot de passe n'est pas valide
                            $password_err = 'Le mot de passe que vous avez entré n\'est pas valide.';
                        }
                    }
                } else {
                    // Afficher un message d'erreur si l'email n'est pas valide
                    $email_err = 'Aucun compte trouvé avec cet email.';
                }
            } else {
                echo 'Oops! Quelque chose s\'est mal passé. Veuillez réessayer plus tard.';
            }

            // Fermer la déclaration préparée
            unset($stmt);
        }
    }

    // Fermer la connexion
    unset($pdo);
}
?>


<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Delobelle</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <link rel="stylesheet" href="style.css">
</head>

<body>

<section id="header">
    <a href="index.php"><img src="img/logo_montre_maline.png" class="logo" alt=""></a>

        <ul id="navbar">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="shop.php">Boutique</a></li>
            <li><a href="about.php">À propos</a></li>
            <li><a class="active" href="sign.php">Sign in/up</a></li>
            <li id="lg-bag"><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
            <a href="#" id="close"><i class="far fa-times"></i></a>
        </ul>
    </div>
    <div id="mobile">
        <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
        <i id="bar" class="fas fa-outdent"></i>
    </div>
</section>

<section id="hero"></section>


<div class="insform"
    <h2>Connexion</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="email">Email :</label><br>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>" required><br>
        <span class="help-block"><?php echo $email_err; ?></span><br>
        <label for="mot_de_passe">Mot de passe :</label><br>
        <input type="password" id="mot_de_passe" name="mot_de_passe" required><br>
        <span class="help-block"><?php echo $password_err; ?></span><br>
        <br>
        <input type="submit" value="Se connecter">
    </form>
</div>


</section>

<footer class="section-p1">
    <div class="col">
        <div class="logo">
            <img class="logo" src="img/logo_montre_maline.png" alt="">
        </div>
        <h4>Contact</h4>
        <p><strong>Adresse : </strong>684 Av. du Club Hippique, 13090 Aix-en-Provence</p>
        <p><strong>Téléphone :</strong>04 42 95 18 65</p>
        <p><strong>Heures :</strong> 10:00 - 18:00, Lun - Sam</p>
        <div class="follow">
            <h4>Suivez-nous</h4>
            <div class="icon">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-pinterest-p"></i>
                <i class="fab fa-youtube"></i>
            </div>
        </div>
    </div>

    <div class="col">
        <h4>À propos</h4>
        <a href="#">À propos de nous</a>
        <a href="#">Informations de livraison</a>
        <a href="#">Politique de confidentialité</a>
        <a href="#">Conditions générales</a>
        <a href="#">Contactez-nous</a>
    </div>

    <div class="col">
        <h4>Mon compte</h4>
        <a href="#">Se connecter</a>
        <a href="#">Voir le panier</a>
        <a href="#">Ma liste de souhaits</a>
        <a href="#">Suivre ma commande</a>
        <a href="#">Aide</a>
    </div>

    <div class="col">

        <h4>Paiement sécurisés</h4>
        <img src="img/pay/pay.png" alt="">
    </div>

    <div class="copyright">
        <p>Site Delobelle - E-commerce </p>
    </div>
</footer>


<script src="script.js"></script>
</body>

</html>


