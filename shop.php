
 
 <link rel="stylesheet" href="./css/shop.css">

 
<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">A la une </h1>
      <p class="lead >Selections de teddys by Teddy.</p>
    </div>
  </section>

  <div class="album py-5">
    <div class="container">

    <div class="row">
            <?php
                $sql = "SELECT * FROM modele";
                if ($result = $conn->query($sql)){
                    while ($obj = $result->fetch_object()){
                        echo "<div class='col-sm-12 col-md-6 col-lg-4'>";
                            echo "<a href='modele.php?mod=".$obj->id."' ><div class='img-liste-modele'>";
                                echo "<img src='img/".$obj->image."'>";
                            echo "</div></a>";
                            echo "<div class='product-desc'>";
                                echo "<h2><h3><a href='modele.php?mod=".$obj->id."' >".$obj->nom."</a></h3></h2>";
                                echo "<div class='product-price'>";
                                    echo "<span class='price'>".$obj->prix."€</span>";
                                echo "</div>";
                            echo "</div>";
                        echo "</div>";
                    }
                }
                $result->close();          
                
            ?>
        </div>
    </div>
  </div>

</main>
