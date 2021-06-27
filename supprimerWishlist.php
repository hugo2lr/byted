<?php

include 'config/connect.php';
session_start();
$mod = $_GET['mod'];
$id = $_SESSION['id'];

$sql = "DELETE FROM wishlist WHERE idclient = ".$id." and idmodele = ".$mod;
$conn->query($sql);
header('Location: wishlist.php');

?>