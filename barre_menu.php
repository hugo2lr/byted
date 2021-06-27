<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
<link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg==" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="./css/barre_menu.css">
</head>

<div class="jumbotron jumbotron-fluid text-center" style="!important">
  <h1>Le Dressing de Teddy</h1>
  <p>By Ted...</p>
</div>

<nav class="navbar navbar-expand-lg nav-fill w-100 navbar-light navbar-custom">
  <a class="navbar-brand" href="#">TEDDY'S Clothes</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="./index.php">Accueil </a>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fas fa-tshirt"></i> Nos textiles 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Teddys</a>
          <a class="dropdown-item" href="#">Sweatshirts</a>
          <a class="dropdown-item" href="#">Jeans</a>
        </div>
      </li>

      <li class="nav-item ">
        <a class="nav-link" href="notre_histoire.php">Notre histoire </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="nous_contacter.php"> Nous contacter </a>
      </li>




    <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-user"></i> Profil</a>
      </li>

        <li class="nav-item">
        <a class="nav-link" href="./panier.php"><i class="fas fa-shopping-cart"></i> Panier   <span class="badge badge-pill badge-secondary"><?php if(empty($SESSION['panier'])){echo 0;} else {echo count($_SESSION["panier"]);}?></span></a> 
      </li>
    </ul>
       <form class="form-inline my-2 my-sm-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Un article en tête ?" aria-label="Search">
      <button class="btn rechercher btn-primary	 btn-sm" type="submit">Rechercher</button>
    </form>
  </div>
</nav>

 