<?php
session_start();
include('config/db.php');

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


    <div>
        <ul id="navbar">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="shop.php">Boutique</a></li>
            <li><a class="active" href="about.php">À propos</a></li>
            <li><a href="sign.php">Sign in/up</a></li>
            <li id="lg-bag"><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
            <a href="#" id="close"><i class="far fa-times"></i></a>
        </ul>
    </div>
    <div id="mobile">
        <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
        <i id="bar" class="fas fa-outdent"></i>
    </div>
</section>

<section id="page-header" class="about-header">

    <h2>#ConnaissezNous </h2>


</section>

<section id="about-head" class="section-p1">
    <img src="img/a_propos.jpeg" alt="">
    <div>
        <h2>Qui sommes-nous ?</h2>
        <p>Chez Montre maline, nous sommes passionnés par l'horlogerie de luxe et l'art intemporel de la fabrication de montres.
            Forts d'une expertise artisanale transmise de génération en génération, nous nous engageons à offrir à nos clients des pièces d'une élégance exceptionnelle et d'une qualité inégalée.
            Chaque montre que nous créons incarne l'alliance parfaite entre tradition horlogère et innovation contemporaine, reflétant ainsi le raffinement et le prestige de ceux qui les portent.</p>
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
