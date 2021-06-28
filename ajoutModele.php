<?php

include 'config/connect.php';
session_start();

$nom = $_POST["nom"];
$prix = $_POST["prix"];
$info = $_POST['info'];
$cat = $_POST['cat'];
$image = $_POST['image'];
$S = $_POST['S'];
$M = $_POST['M'];
$L = $_POST['L'];

$sql = "INSERT INTO modele VALUES (NULL, '".$nom."', '".$prix."', '".$info."', '".$cat."', '".$image."')";
$conn->query($sql);

$sql = "SELECT id FROM modele WHERE nom = '".$nom."'";
if ($result = $conn->query($sql)){
    while ($obj = $result->fetch_object()){
        //S
        $sql2 = "INSERT INTO produit VALUES (NULL, '".$obj->id."', '1', '".$S."')";
        $conn->query($sql2);

        //M
        $sql2 = "INSERT INTO produit VALUES (NULL, '".$obj->id."', '2', '".$M."')";
        $conn->query($sql2);

        //L
        $sql2 = "INSERT INTO produit VALUES (NULL, '".$obj->id."', '3', '".$L."')";
        $conn->query($sql2);
    }
}


header('Location: listeCategorieAdmin.php');
?>