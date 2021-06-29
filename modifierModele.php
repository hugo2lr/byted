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
  $mod = $_GET['mod'];
  include('barre_menu_admin.php');
  ?>
  <body>
        <div class="container">
           <?php
                $sql = "SELECT * FROM modele WHERE id =".$mod;
                if ($result = $conn->query($sql)){
                    while ($obj = $result->fetch_object()){
                        ?>
                       <div class='col-12'>
                        <form action='modificationModele.php' method='post'>
                        <?php echo "<input type='hidden'  name='mod' value='".$mod."'>";?>
                            <label for="inputNom" class="col-sm-2 col-form-label">Nom</label>
                        <div class="col-sm-10">
                       <?php
                            echo "<input type='text' class='form-control' id='inputNom' placeholder='".$obj->nom."' name='nom'>";
                            ?>
                        </div>
                            
                        <label for="inputPrix" class="col-sm-2 col-form-label">Prix</label>
                    <div class="col-sm-10">
                        <input type="number" step="0.01" class="form-control" id="inputPrix" placeholder="<?php echo $obj->prix ?>€" name="prix">
                    </div>

                    <label for="inputInfo" class="col-sm-2 col-form-label">Info</label>
                    <div class="col-sm-10">
                        <input type="textarea" class="form-control" id="inputInfo" placeholder="<?php echo $obj->info ?>" name="info">
                    </div>

<?php
                    echo "<div class='img-modele'>";
                                echo "<img src='img/".$obj->image."'>";
                            echo "</div>";
?>

                        <div class="row">
                    <input type="file"
                         name="image"
                        accept="image/png, image/jpeg">
                    </div>
                    
                    <div class="row">
                        <h2>Disponible en :</h2>
                    </div>
                        <?php
                            $sql = "SELECT * FROM produit WHERE idmodele =".$mod;
                            if ($result = $conn->query($sql)){
                                while ($obj = $result->fetch_object()){
                                    if ($obj->idtaille == 1){
                                        echo "<p>S - ".$obj->stock."</p>";
                                    }
                                    if ($obj->idtaille == 2){
                                        echo "<p>M - ".$obj->stock."</p>";
                                    }
                                    if ($obj->idtaille == 3){
                                        echo "<p>L - ".$obj->stock."</p>";
                                    }
                                }
                            }
                        ?>
                    <select name="taille" required class="form-select" aria-label="Default select example">
                                
                                <?php
                                    $sql = "SELECT * FROM taille";
                                    if ($result = $conn->query($sql)){
                                        while ($obj = $result->fetch_object()){

                                                echo "<option value='".$obj->id."'>".$obj->nomTaille."</option>";
                                            
                                        }
                                    }
                                    
                                            
                                ?>

                            </select>
                            <input type="number" class="qty" name="qty" min="0"/>
                            <br>

                        <?php
                            $sql = "SELECT SUM(prixTotal)  AS prix FROM commande WHERE idproduit IN (SELECT id from produit WHERE idmodele =".$mod.")";
                            if ($result = $conn->query($sql)){
                                while ($obj = $result->fetch_object()){
                                    echo "<p>Argent généré: ".$obj->prix."€</p>";
                                    $sql2 = "SELECT SUM(prixTotal)  AS prix FROM commande";
                                    if ($result2 = $conn->query($sql2)){
                                        while ($obj2 = $result2->fetch_object()){
                                            echo "<p>".((round( ($obj->prix)/($obj2->prix), 2 ))*100)."% des ventes</p>";
                                        }
                                    }
                                }
                            }
                            $sql = "SELECT SUM(quantite) AS nombre FROM commande WHERE idproduit IN (SELECT id from produit WHERE idmodele=".$mod.")";
                            if ($result = $conn->query($sql)){
                                while ($obj = $result->fetch_object()){
                                    echo "<p>Nombre d'articles vendus: ".$obj->nombre."</p>";
                                }
                            }
                        ?>

                    <button type="submit" class="btn btn-primary mb-2">Modifier</button>
                         </form>
                         <?php echo "<a class='btn btn-danger' href='supprimerModele.php?id=".$mod."' role='button'>Supprimer</a>" ?>
                        </div>
                        <?php
                    }
                }
           ?>
        </div>
    </body>
    <?php
  include('./html/footer.html');
  include('scripts.php');
  ?>