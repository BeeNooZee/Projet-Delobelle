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
                <li><a href="shop.html">Boutique</a></li>
                <li><a href="about.html">À propos</a></li>
                <li><a href="signin.html">Sign in/up</a></li>
                <li id="lg-bag"><a href="#" class="active"><i class="far fa-shopping-bag"></i></a></li>
                <a id="close" href="#"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>

        </div>
    </section>

    <section id="page-header" class="about-header">

        <h2>#panier</h2>

    </section>

    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Supprimer</td>
                    <td>Image</td>
                    <td>Produit</td>
                    <td>Prix</td>
                    <td>Quantité</td>
                    <td>Sous-total</td>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="img/products/montre-sport-homme.jpg" alt=""></td>
                    <td>Scortcher Watch</td>
                    <td>500€</td>
                    <td><input type="number" value="1" name="" id=""></td>
                    <td>500€</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section id="cart-add" class="section-p1">
        <div id="cuopon">
            <h3>Appliquer le Coupon</h3>
            <div>
                <input type="text" name="" id="" placeholder="Entrez Votre Coupon">
                <button class="normal">Appliquer</button>
            </div>
        </div>

        <div id="subtotal">
            <h3>Totaux du Panier</h3>
            <table>
                <tr>
                    <td>Sous-total du Panier</td>
                    <td>500€</td>
                </tr>
                <tr>
                    <td>Expédition</td>
                    <td>Gratuite</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>500€</strong></td>
                </tr>
            </table>
            <button class="normal">Procéder au paiement</button>
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



    <script src="script.js"></script>

</body>

</html>