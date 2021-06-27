<html> 
<head>
  <link rel="stylesheet" href="page_accueil.css">
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 </head>

 <?php
  include 'config/connect.php';
  include("head.php");
  include('barre_menu.php');
  ?>
<body>
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <h1>Panier</h1>
                    <hr>
                </div>
            </div>

        <?php
            $sql = "SELECT * from panier, produit, modele, taille WHERE idclient = ".$_SESSION["id"]." and produit.id = panier.idproduit and modele.id = produit.idmodele and produit.idtaille = taille.id";
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
                                    echo "<h3>".$obj->nom." - ".$obj->nomTaille." (".$obj->quantite.")</h3>";
                                echo "</div>";
                                echo "<span><p>";
                                $sql2 = "SELECT SUM(quantite*prix) AS prix FROM panier, produit, modele where panier.idproduit = produit.id and produit.idmodele = modele.id and idclient = ".$_SESSION["id"]." and produit.id = ".$obj->idproduit;
                                if ($result2 = $conn->query($sql2)){  
                                    while ($obj2 = $result2->fetch_object()){
                                        echo $obj2->prix."€";
                                }
                            }
                                echo "</p></span>";                              
                            echo "</div>";
                            echo "<a class='btn btn-danger' href='supprimerPanier?prod=".$obj->idproduit."' role='button'>Supprimer du panier</a>";
                        echo "</div>";
                    echo "</div>";
                    echo "<hr>";

                }
            }
            $sql = "SELECT SUM(quantite*prix) AS prix FROM panier, produit, modele where panier.idproduit = produit.id and produit.idmodele = modele.id and idclient = ".$_SESSION["id"];
            if ($result = $conn->query($sql)){
                while ($obj = $result->fetch_object()){
                    if (isset($obj->prix)){
                        echo "<span><p>Prix total: ".$obj->prix."€</p></span>";
                        echo "<a class='btn btn-primary' href='validerPanier.php' role='button'>Effectuer ma commande</a>";
                    }
                    else{
                        echo "<p>Panier vide :'(</p>";
                    }
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
