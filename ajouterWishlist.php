<?php

include 'config/connect.php';
session_start();
$id = $_SESSION["id"];
$mod=$_GET["mod"];

$sql = "INSERT INTO wishlist VALUES ('".$id."', '".$mod."')";
$conn->query($sql);

header('Location: modele.php?mod='.$mod);

?>