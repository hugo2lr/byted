<?php

include 'config/connect.php';
session_start();
$idclient = $_GET['id'];
$id = $_SESSION['id'];

$sql = "DELETE FROM adresse WHERE id IN (SELECT idadresse FROM utilisateur WHERE id =".$idclient.")";
$conn->query($sql);
$sql = "DELETE FROM utilisateur WHERE id=".$idclient;
$conn->query($sql);
header('Location: clients.php');

?>