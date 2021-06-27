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
  $search = $_POST['recherche'];
  ?>
    <body>
        <div class="container">
            <?php
                    echo "<h1>Résultats pour '".$search."'</h1><hr>";
            ?>

            <div class="row">
                <?php
                    $sql = "SELECT * FROM modele WHERE nom like'%".$search."%'";
                    if ($result = $conn->query($sql)){
                        while ($obj = $result->fetch_object()){
                            echo "<div class='col-sm-12 col-md-6 col-lg-4'>";
                                echo "<a href='modele?mod=".$obj->id."' ><div class='img-liste-modele'>";
                                    echo "<img src='img/".$obj->image."'>";
                                echo "</div></a>";
                                echo "<div class='product-desc'>";
                                    echo "<h2><h3><a href='modele?mod=".$obj->id."' >".$obj->nom."</a></h3></h2>";
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


