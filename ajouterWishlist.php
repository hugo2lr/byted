<?php

include 'config/connect.php';
session_start();
if (!(isset($_SESSION['id']))){
    header('Location: login.php');
    exit;
  }
$id = $_SESSION["id"];
$mod=$_GET["mod"];

$sql = "INSERT INTO wishlist VALUES ('".$id."', '".$mod."')";
$conn->query($sql);

header('Location: modele.php?mod='.$mod);

?>