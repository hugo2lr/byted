<?php

include 'config/connect.php';
session_start();

if (isset($_POST['nom'])&& ($_POST['nom']!='')){
    $sql = "UPDATE modele SET nom ='".$_POST['nom']."' WHERE id =".$_POST['mod'];
    $conn->query($sql);
}

if (isset($_POST['prix'])&& ($_POST['prix']!='')){
    $sql = "UPDATE modele SET prix ='".$_POST['prix']."' WHERE id =".$_POST['mod'];
    $conn->query($sql);
}

if (isset($_POST['info'])&& ($_POST['info']!='')){
    $sql = "UPDATE modele SET info ='".$_POST['info']."' WHERE id =".$_POST['mod'];
    $conn->query($sql);
}

if (isset($_POST['image'])&& ($_POST['image']!='')){
    $sql = "UPDATE modele SET image ='".$_POST['image']."' WHERE id =".$_POST['mod'];
    $conn->query($sql);
}

if (isset($_POST['qty'])&& ($_POST['qty']!='')){
    $sql = "SELECT * FROM produit WHERE idmodele =".$_POST["mod"]." AND idtaille =".$_POST["taille"];
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $sql = "UPDATE produit SET stock ='".$_POST['qty']."' WHERE idmodele =".$_POST['mod']." AND idtaille = ".$_POST["taille"];
        $conn->query($sql);
    }
    else {
        $sql = "INSERT INTO produit VALUES (NULL, '".$_POST['mod']."', '".$_POST["taille"]."', '".$_POST["qty"]."')"; 
        $conn->query($sql);
    }
}

header('Location: modifierModele?mod='.$_POST["mod"]);
?>