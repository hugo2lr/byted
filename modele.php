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
                <?php
                    $mod = $_GET['mod'];
                    $sql = "SELECT * from modele WHERE id = ".$mod;
                    if ($result = $conn->query($sql)){
                    while ($obj = $result->fetch_object()){
                        echo "<div class='col-6'>";
                            echo "<div class='img-modele'>";
                                echo "<img src='img/".$obj->image."'>";
                            echo "</div>";
                        echo "</div>";
                        echo "<div class='col-6'>";
                            echo "<h2>".$obj->nom."</h2>";
                            echo "<p>".$obj->info."</p>";
                            echo "<p>".$obj->prix."€</p>";
                            
                            echo "<a class='btn btn-danger' href='ajouterWishlist.php?mod=".$mod."' role='button'>";?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
  <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
</svg></a>
                            <form action="ajoutPanier.php" method="POST">
                            <?php echo "<input type='hidden'  name='mod' value='".$mod."'>";?>
                            <select name="taille" required class="form-select" aria-label="Default select example">
                                
                                <?php
                                    $sql = "SELECT * FROM taille,produit where idmodele = ".$mod." and taille.id = produit.idtaille";
                                    if ($result = $conn->query($sql)){
                                        while ($obj = $result->fetch_object()){
                                            if ($obj->stock == 0){
                                                echo "<option disabled value='".$obj->idtaille."'>".$obj->nom."</option>";
                                            }
                                            else {
                                                echo "<option value='".$obj->idtaille."' data-max='".$obj->stock."'>".$obj->nomTaille."</option>";
                                            }
                                        }
                                    }
                                    
                                            
                                ?>

                            </select>
                                <input type="number" class="qty" name="qty" value="1" min="1" max="10" />
                                <button class="btn btn-primary" type="submit">Ajouter au panier</button>
                            </form>
                            <?php
                        echo "</div>";
                    }
                }
               
            ?>
            </div>
        </div>
        <script>
            $('select').change(function(){
                console.log("a");
    $('input[type=number]').attr('max', $(this).find(":selected").data('max'));
});
        </script>
    </body>
<?php
  include('./html/footer.html');
  include('scripts.php');
  ?>
</html>
    