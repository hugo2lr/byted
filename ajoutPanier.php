<?php

include 'config/connect.php';
session_start();
$taille=$_POST["taille"];
$qty=$_POST["qty"];
$mod=$_POST["mod"];


$sql = "SELECT id FROM produit where idmodele = '".$mod."' and idtaille = '".$taille."'";
if ($result = $conn->query($sql)){
    while ($obj = $result->fetch_object()){
        $sql = "INSERT INTO panier (idclient, idproduit, quantite) VALUES ('".$_SESSION["id"]."', '".$obj->id."', '".$qty."')";
        $conn->query($sql);

    }
}

header('Location: index.php');

?>