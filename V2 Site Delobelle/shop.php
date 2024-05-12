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
        <a href="index.html"><img src="img/logo montre marine.png" class="logo" alt=""></a>


        <div>
            <ul id="navbar">
                <li><a href="index.html">Accueil</a></li>
                <li><a class="active" href="shop.html">Boutique</a></li>
                <li><a href="about.html">À propos</a></li>
                <li><a href="signin.html">Sign in/up</a></li>
                <li id="lg-bag"><a href="cart.html"><i class="far fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="page-header" class="about-header">

        <h2>#AchetezNous </h2>


    </section>

    <section id="product1" class="section-p1">
        <div class="pro-container">
            <div class="pro" onclick="window.location.href='sproduct.html';">
                <img src="img/products/montre-homme-classique.jpg" alt="">
                <div class="des">
                    <span>Homme Classique</span>
                    <h5>Olympus Watch</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>350€</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct.html';">
                <img src="img/products/montre-sport-homme.jpg" alt="">
                <div class="des">
                    <span>Sport Homme</span>
                    <h5>Scratcher Sport</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>500€</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct.html';">
                <img src="img/products/montre-femme-classique.jpg" alt="">
                <div class="des">
                    <span>Femme Classique</span>
                    <h5>Octavia Watch</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>350€</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct.html';">
                <img src="img/products/montre-spot-femme.jpg" alt="">
                <div class="des">
                    <span>Femme Sport</span>
                    <h5>Alppe Watch</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>500€</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>  
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <div class="logo">
                <img class="logo" src="img/logo montre marine.png" alt="">
            </div>
            <h4>Contact</h4>
            <p><strong>Adresse : </strong> 562 Wellington Road, Rue 32, San Francisco</p>
            <p><strong>Téléphone :</strong> +01 2222 365 /(+91) 01 2345 6789</p>
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
            
            <h4>Passerelles de paiement sécurisées</h4>
            <img src="img/pay/pay.png" alt="">
        </div>

        <div class="copyright">
            <p>Site Delobelle - E-commerce </p>
        </div>
    </footer>


    <script src="script.js"></script>
</body>

</html>
