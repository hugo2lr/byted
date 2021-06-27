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
                    <h1>Commandes</h1>
                    <hr>
                </div>
            </div>

        <?php
            $sql = "SELECT * from commande, produit, modele, taille WHERE idclient = ".$_SESSION["id"]." and produit.id = commande.idproduit and modele.id = produit.idmodele and produit.idtaille = taille.id";
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
                                
                                echo $obj->prixTotal."€";
                                echo "</p></span>";   
                                echo "<span><p>";
                                
                                echo $obj->date;
                                echo "</p></span>";                           
                            echo "</div>";
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

    