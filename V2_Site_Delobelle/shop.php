<?php
session_start();

// Initialiser les données des articles
$articles = [
    ['id' => 0, 'nom' => 'Olympus', 'prix' => 350, 'image' => 'img/montre_homme_classique.jpg'],
    ['id' => 1, 'nom' => 'Scortcher', 'prix' => 500, 'image' => 'img/montre_sport_homme.jpg'],
    ['id' => 2, 'nom' => 'Octavia', 'prix' => 350, 'image' => 'img/montre_femme_classique.jpg'],
    ['id' => 3, 'nom' => 'Alppe', 'prix' => 500, 'image' => 'img/montre_femme_sport.jpg']
];

$add = 1;

// Fonction pour ajouter un article au panier
function ajout($ligne)
{
    global $add;
    $cart =& $_SESSION['add_cart']; // Utiliser une référence pour modifier le panier
    if (isset($cart[$ligne][4])) {
        $cart[$ligne][4] += $add;
    } else {
        $cart[$ligne][4] = $add;
    }
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


    <div>
        <ul id="navbar">
            <li><a href="index.php">Accueil</a></li>
            <li><a class="active" href="shop.php">Boutique</a></li>
            <li><a href="about.php">À propos</a></li>
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

    <h2>#AchetezNous </h2>


</section>

<section id="product1" class="section-p1">
    <div class="pro-container">
        <?php foreach ($articles as $article): ?>
            <div class="pro" onclick="window.location.href='sproduct2.php';">
                <form method="post" action="shop.php">
                    <img src="<?php echo $article['image']; ?>" alt="">
                    <div class="des">
                        <span>Sport Homme</span>
                        <h5><?php echo $article['nom']; ?></h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4 style="border: none; background: none; padding: 0; margin: 0;"><?php echo $article['prix']; ?>€</h4>
                    </div>
                    <a href="" <?php ajout($article['id']) ?>><i class="fal fa-shopping-cart cart"></i></a>
                </form>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<footer class="section-p1">
    <!-- Footer -->
</footer>

</body>

</html>
