<html> 
<head>
  <link rel="stylesheet" href="page_accueil.css">
  <title>Byted</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 </head>

 <?php

  include 'config/connect.php';
  include("head.php");
  if (!(isset($_SESSION['id']))){
    header('Location: login.php');
    exit;
  }
  include('barre_menu.php');
  ?>
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
                            echo "<div class='img-liste-modele'>";
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
                            echo "<a class='btn btn-primary' href='modele.php?mod=".$obj->idmodele."' role='button'>Voir le produit</a>";
                            echo "<a class='btn btn-danger' href='supprimerWishlist.php?mod=".$obj->idmodele."' role='button'>Supprimer de la wishlist</a>";
                        echo "</div>";
                    echo "</div>";
                    echo "<hr>";

                }
            }

            ?>
            
        </div>
    </body>
  <?php
  include('./html/footer.html');
  include('scripts.php');
  ?>
</html>

    