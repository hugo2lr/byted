<!DOCTYPE html>
<html lang=fr>
    <head>
        <meta charset="utf-8"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet">
        <title>BYTED Clothes</title>
        <?php

include 'config/connect.php';
session_start();
$mod = $_GET['mod'];
?>
    </head>
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
                    
                    <button type="submit" class="btn btn-primary mb-2">Modifier</button>
                         </form>
                         <?php echo "<a class='btn btn-danger' href='supprimerModele?id=".$mod."' role='button'>Supprimer</a>" ?>
                        </div>
                        <?php
                    }
                }
           ?>
        </div>
    </body>
</html>