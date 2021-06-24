<?php

include 'config/connect.php';
session_start();
$prod = $_GET['prod'];
$id = $_SESSION['id'];

$sql = "DELETE FROM panier WHERE idclient = ".$id." and idproduit = ".$prod;
$conn->query($sql);
header('Location: panier.php');

?>