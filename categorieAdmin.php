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
  include('barre_menu_admin.php');
  ?>
  <body>
        <div class="container">
            <?php
            $sql = "SELECT nom from categorie WHERE id = ".$_GET['cat'];
            if ($result = $conn->query($sql)){
                while ($obj = $result->fetch_object()){
                    echo "<h1>".$obj->nom."</h1><hr>";
                    
                }
            }
            $result->close();
            ?>

            <div class="row">
                <div class="col-2">
                    <?php echo "<a class='btn btn-primary' href='ajouterModele.php?cat=".$_GET['cat']."' role='button'>Ajouter un modele</a>"; ?>
                </div>
                <div class="col-2">
                    <?php echo"<a class='btn btn-danger' href='supprimerCategorie.php?cat=".$_GET['cat']."' role='button'>Supprimer la categorie</a>";?>
                </div>
            </div>

            <div class="row">
                <?php
                    $sql = "SELECT * FROM modele WHERE modele.idcat = ".$_GET['cat'];
                    if ($result = $conn->query($sql)){
                        while ($obj = $result->fetch_object()){
                            echo "<div class='col-sm-12 col-md-6 col-lg-4'>";
                                echo "<a href='modifierModele.php?mod=".$obj->id."' ><div class='img-liste-modele'>";
                                    echo "<img src='img/".$obj->image."'>";
                                echo "</div></a>";
                                echo "<div class='product-desc'>";
                                    echo "<h2><h3><a href='modifierModele.php?mod=".$obj->id."' >".$obj->nom."</a></h3></h2>";
                                    echo "<div class='product-price'>";
                                        echo "<span class='price'>".$obj->prix."€</span>";
                                    echo "</div>";
                                echo "</div>";
                            echo "</div>";
                        }
                    }
                    $result->close();          
                    
                ?>
            </div>
        </div>
    </body>
    <?php
  include('./html/footer.html');
  include('scripts.php');
  ?>
</html>