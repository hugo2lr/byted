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

header('Location: modifierModele?mod='.$_POST["mod"]);
?>