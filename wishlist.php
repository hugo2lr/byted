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
                <div class="col-12">
                    <h1>Wishlist</h1>
                    <hr>
                </div>
            </div>

        <?php
            $sql = "SELECT * from wishlist, modele WHERE idclient = ".$_SESSION["id"]." and modele.id = wishlist.idmodele";
            if ($result = $conn->query($sql)){
                while ($obj = $result->fetch_object()){
                    echo "<div class='row'>";
                        echo "<div class='col-4'>";
                            echo "<div class=''>";
                                 echo "<img src='img/".$obj->image."'>";
                            echo "</div>";
                        echo "</div>";
                        echo "<div class='col-8'>";
                            echo "<div class='produit-panier-info'>";
                                echo "<div class='produit-panier-header'>";
                                    echo "<h3>".$obj->nom;
                                echo "</div>";
                                echo "<span><p>";
                                
                                        echo $obj->prix."€";

                                echo "</p></span>";                              
                            echo "</div>";
                            echo "<a class='btn btn-primary' href='modele?mod=".$obj->idmodele."' role='button'>Voir le produit</a>";
                            echo "<a class='btn btn-danger' href='supprimerWishlist?mod=".$obj->idmodele."' role='button'>Supprimer de la wishlist</a>";
                        echo "</div>";
                    echo "</div>";
                    echo "<hr>";

                }
            }

            ?>
            
        </div>
    </body>
</html>