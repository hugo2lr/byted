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

            <form action="ajoutCategorie" method="post">
                            <label for="inputNom" class="col-sm-2 col-form-label">Nom</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputNom" placeholder="Nom" name="nom">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Ajouter</button>
            </form>
        </div>
    </body>
    <?php
  include('./html/footer.html');
  include('scripts.php');
  ?>
</html>