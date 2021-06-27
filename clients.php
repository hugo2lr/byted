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
    <body>
        <div class="container">
           <?php
                $sql = "SELECT * FROM utilisateur WHERE id IN (SELECT id from client)";
                if ($result = $conn->query($sql)){
                    while ($obj = $result->fetch_object()){
                        
                        echo "<div class='row'>";
                            echo "<a href='modifierClient?id=".$obj->id."'>".$obj->prenom." ".$obj->nom."</a>";
                        echo "</div>";
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
