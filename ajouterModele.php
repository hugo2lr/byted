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
           <div class="col-12">
           <form action="ajoutModele.php" method="post">
                    <label for="inputNom" class="col-sm-2 col-form-label">Nom</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputNom" placeholder="Nom" name="nom" required>
                    </div>

                    <label for="inputPrix" class="col-sm-2 col-form-label">Prix</label>
                    <div class="col-sm-10">
                        <input type="number" step="0.01" class="form-control" id="inputPrix" name="prix" required>
                    </div>

                    <label for="inputInfo" class="col-sm-2 col-form-label">Info</label>
                    <div class="col-sm-10">
                        <input type="textarea" class="form-control" id="inputInfo" placeholder="Texte de description" name="info" required>
                    </div>

                    <?php echo "<input type='hidden' name='cat' value='".$_GET['cat']."'>"; ?>

                            <label for="inputImage" class="col-sm-2 col-form-label">Image</label>
                            <input id="inputImage" required type="file"
                         name="image"
                        accept="image/png, image/jpeg">

<br>
                        <label for="inputS" class="col-sm-2 col-form-label">Quantité taille S</label>
                    <div class="col-sm-10">
                        <input type="number" class="qty" id="inputS" name="S" min="0" required/>
                    </div>

                    <label for="inputM" class="col-sm-2 col-form-label">Quantité taille M</label>
                    <div class="col-sm-10">
                        <input type="number" class="qty" id="inputM" name="M" min="0" required/>
                    </div>

                    <label for="inputL" class="col-sm-2 col-form-label">Quantité taille L</label>
                    <div class="col-sm-10">
                        <input type="number" class="qty" id="inputL" name="L" min="0" required/>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Ajouter</button>
                    </div>
                </form>
           </div>
        </div>
    </body>
    <?php
  include('./html/footer.html');
  include('scripts.php');
  ?>
</html>