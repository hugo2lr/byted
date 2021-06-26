<!DOCTYPE html>
<html lang=fr>
    <head>
        <meta charset="utf-8"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet">
        <title>BYTED Clothes</title>
        <?php
            include 'config/connect.php';
            session_start();
        ?>
    </head>
    <body>
        <div class="container">

            <div class="row">
                <a href="listeCategorie">Produits</a>
            </div>

            <div class="row">
                <a href="panier">Panier</a>
            </div>

            <div class="row">
                <a href="wishlist">Wishlist</a>
            </div>

            <div class="row">
                <a href="profil">Profil</a>
            </div>

        </div>
    </body>
</html>