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
  include('barre_menu_admin.php');
  ?>
  <div class="container">
    <h2>Liste des meilleurs clients</h2>
    <?php
    $sql= "SELECT SUM(prixTotal) AS sum, idclient FROM commande GROUP BY idclient ORDER BY SUM(prixTotal) DESC";
    if ($result = $conn->query($sql)){
        while ($obj = $result->fetch_object()){
            echo "<div class='row'>";
            $sql2= "SELECT * FROM utilisateur WHERE id=".$obj->idclient;
            if ($result2 = $conn->query($sql2)){
                while ($obj2 = $result2->fetch_object()){
                    echo "<a href='modifierClient.php?id=".$obj->idclient."'>".$obj2->prenom." ".$obj2->nom.": ".$obj->sum."€ de commande</a>";
                }
            }
            echo "</div>";
        }
    }
    echo '</div>';
    ?>
  <?php
  include('./html/footer.html');
  include('scripts.php');
  ?>
</html>