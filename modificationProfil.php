<?php

include 'config/connect.php';
session_start();
if (isset($_POST['prenom']) && ($_POST['prenom']!='')){
    $sql = "UPDATE utilisateur SET prenom ='".$_POST['prenom']."' WHERE id =".$_POST['id'];
    $conn->query($sql);
}

if (isset($_POST['nom'])&& ($_POST['nom']!='')){
    $sql = "UPDATE utilisateur SET nom ='".$_POST['nom']."' WHERE id =".$_POST['id'];
    $conn->query($sql);
}

if (isset($_POST['mail'])&& ($_POST['mail']!='')){
    $sql = "UPDATE utilisateur SET mail ='".$_POST['mail']."' WHERE id =".$_POST['id'];
    $conn->query($sql);
}

if (isset($_POST['tel'])&& ($_POST['tel']!='')){
    $sql = "UPDATE utilisateur SET tel ='".$_POST['tel']."' WHERE id =".$_POST['id'];
    $conn->query($sql);
}

if (isset($_POST['mdp'])&& ($_POST['mdp']!='')){
    $sql = "UPDATE utilisateur SET mdp ='".$_POST['mdp']."' WHERE id =".$_POST['id'];
    $conn->query($sql);
}

if (isset($_POST['date'])){
    $sql = "UPDATE utilisateur SET date ='".$_POST['date']."' WHERE id =".$_POST['id'];
    $conn->query($sql);
}

if (isset($_POST['adresse'])&& ($_POST['adresse']!='')){
    $sql = "UPDATE adresse SET rue ='".$_POST['adresse']."' WHERE ID IN (SELECT idadresse FROM utilisateur WHERE id =".$_POST['id'].")";
    $conn->query($sql);
}

if (isset($_POST['ville'])&& ($_POST['ville']!='')){
    $sql = "UPDATE adresse SET ville ='".$_POST['ville']."' WHERE ID IN (SELECT idadresse FROM utilisateur WHERE id =".$_POST['id'].")";
    $conn->query($sql);
}

if (isset($_POST['cp'])&& ($_POST['cp']!='')){
    $sql = "UPDATE adresse SET cp ='".$_POST['cp']."' WHERE ID IN (SELECT idadresse FROM utilisateur WHERE id =".$_POST['id'].")";
    $conn->query($sql);
}

header('Location: profil');
?>