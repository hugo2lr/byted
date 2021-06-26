<!DOCTYPE html>
<html lang=fr>
    <head>
        <meta charset="utf-8"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link href="../css/style.css" rel="stylesheet">
        <title>BYTED Clothes</title>
        <?php

include 'config/connect.php';
session_start();
$idclient = $_GET['id'];

?>
    </head>
    <body>
        <div class="container">
           <?php
                $sql = "SELECT * FROM utilisateur, adresse WHERE utilisateur.id =".$idclient." and utilisateur.idadresse = adresse.id";
                if ($result = $conn->query($sql)){
                    while ($obj = $result->fetch_object()){
                        ?>
                       <div class='col-12'>
                        <form action='modificationClient.php' method='post'>
                        <?php echo "<input type='hidden'  name='id' value='".$idclient."'>";?>
                            <label for="inputNom" class="col-sm-2 col-form-label">Nom</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputNom" placeholder=<?php echo $obj->nom ?> name="nom">
                        </div>
                            
                        <label for="inputPrenom" class="col-sm-2 col-form-label">Prénom</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPrenom" placeholder=<?php echo $obj->prenom ?> name="prenom">
                    </div>

                    <label for="inputEmail" class="col-sm-2 col-form-label">Adresse mail</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail" placeholder=<?php echo $obj->mail ?> name="mail">
                    </div>

                    <label for="inputPassword" class="col-sm-2 col-form-label">Mot de passe</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword" placeholder=<?php echo $obj->mdp ?> name="mdp">
                    </div>

                    <label for="inputDate" class="col-sm-2 col-form-label">Date de naissance</label>
                    <div class="col-sm-10">
                        <input type="date" id="inputDate" name="date">
                    </div>

                    <label for="inputTel" class="col-sm-2 col-form-label">Numéro de téléphone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail" placeholder=<?php echo $obj->tel ?> name="tel" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="10" minlength="10">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="inputAdresse">Adresse</label>
                        <input type="text" class="form-control " id="inputAdresse" name="adresse" placeholder="<?php echo $obj->rue ?>" >

                        </div>
                        <div class="col-md-3 mb-3">
                        <label for="inputVille">Ville</label>
                        <input type="text" class="form-control " id="inputVille" name="ville" placeholder="<?php echo $obj->ville ?>" >

                        </div>
                        <div class="col-md-3 mb-3">
                        <label for="inputCP">Code postal</label>
                        <input type="text" class="form-control " id="inputCP" name="cp" placeholder="<?php echo $obj->cp ?>"  onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="5" minlength="5">
                    <button type="submit" class="btn btn-primary mb-2">Modifier</button>
                         </form>
                         <?php echo "<a class='btn btn-danger' href='supprimerClient?id=".$idclient."' role='button'>Supprimer</a>" ?>
                        </div>
                        <?php
                    }
                }
           ?>
        </div>
    </body>
</html>