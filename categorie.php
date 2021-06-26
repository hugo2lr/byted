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
        ?>
    </head>
    <body>
        <div class="container">
            <?php
            $sql = "SELECT nom from categorie WHERE id = ".$_GET['cat'];
            if ($result = $conn->query($sql)){
                while ($obj = $result->fetch_object()){
                    echo "<h1>".$obj->nom."</h1><hr>";
                    
                }
            }
            $result->close();
            ?>

            <div class="row">
                <?php
                    $sql = "SELECT * FROM modele WHERE modele.idcat = ".$_GET['cat'];
                    if ($result = $conn->query($sql)){
                        while ($obj = $result->fetch_object()){
                            echo "<div class='col-sm-12 col-md-6 col-lg-4'>";
                                echo "<a href='modele?mod=".$obj->id."' ><div class='img-liste-modele'>";
                                    echo "<img src='img/".$obj->image."'>";
                                echo "</div></a>";
                                echo "<div class='product-desc'>";
                                    echo "<h2><h3><a href='modele?mod=".$obj->id."' >".$obj->nom."</a></h3></h2>";
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
    </body>
</html>