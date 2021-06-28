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

            <ul>
            <?php
            $sql = "SELECT * from categorie";
            if ($result = $conn->query($sql)){
                while ($obj = $result->fetch_object()){
                    echo "<li><a href='categorieAdmin.php?cat=".$obj->id."'>".$obj->nom."</a></li>";
                    
                }
            }
            $result->close();
            ?>
            </ul>
            <a class='btn btn-primary' href='ajouterCategorie.php' role='button'>Ajouter une categorie</a>
        </div>
    </body>
    <?php
  include('./html/footer.html');
  include('scripts.php');
  ?>
</html>
