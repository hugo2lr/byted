<!DOCTYPE html>
<html lang=fr>
    <head>
        <meta charset="utf-8"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet">
        <title>BYTED Clothes</title>
        <?php
            include 'config/connect.php';
        ?>
    </head>
    <body>
        <div class="container">
            <h1>A</h1>
            <div class="row">
                <!-- Se connecter -->
                <div class="col-6">
                    <h1>Se connecter</h1>
                    <hr>
                    <form action="authentification.php" method="post">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Adresse mail</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail" placeholder="Adresse mail" name="mail" required>
                    </div>
                    <label for="inputPassword" class="col-sm-2 col-form-label">Mot de passe</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Mot de passe" name="mdp" required>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Connexion</button>
                    </form>
                </div>
                <!-- Creer un compte -->
                <div class="col-6">
                    <h1>Créer un compte</h1>
                    <hr>
                    <form action="inscription.php" method="post">

                    <label for="inputNom" class="col-sm-2 col-form-label">Nom</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputNom" placeholder="Nom" name="nom">
                    </div>

                    <label for="inputPrenom" class="col-sm-2 col-form-label">Prénom</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPrenom" placeholder="Prénom" name="prenom">
                    </div>

                    <label for="inputEmail" class="col-sm-2 col-form-label">Adresse mail</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail" placeholder="Adresse mail" name="mail">
                    </div>

                    <label for="inputPassword" class="col-sm-2 col-form-label">Mot de passe</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Mot de passe" name="mdp">
                    </div>

                    <label for="inputDate" class="col-sm-2 col-form-label">Date de naissance</label>
                    <div class="col-sm-10">
                        <input type="date" id="inputDate" name="date">
                    </div>

                    <label for="inputTel" class="col-sm-2 col-form-label">Numéro de téléphone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail" placeholder="Numéro de téléphone" name="tel" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="10" minlength="10">
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                        <label for="inputAdresse">Adresse</label>
                        <input type="text" class="form-control is-invalid" id="inputAdresse" name="adresse" placeholder="Adresse" required>

                        </div>
                        <div class="col-md-3 mb-3">
                        <label for="inputVille">Ville</label>
                        <input type="text" class="form-control is-invalid" id="inputVille" name="ville" placeholder="Ville" required>

                        </div>
                        <div class="col-md-3 mb-3">
                        <label for="inputCP">Code postal</label>
                        <input type="text" class="form-control is-invalid" id="inputCP" name="cp" placeholder="Code postal" required onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="5" minlength="5">

                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mb-2">S'inscrire</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>