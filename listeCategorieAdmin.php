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

            <ul>
            <?php
            $sql = "SELECT * from categorie";
            if ($result = $conn->query($sql)){
                while ($obj = $result->fetch_object()){
                    echo "<li><a href='categorieAdmin?cat=".$obj->id."'>".$obj->nom."</a></li>";
                    
                }
            }
            $result->close();
            ?>
            </ul>
        </div>
    </body>
</html>