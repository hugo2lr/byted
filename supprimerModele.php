<?php

include 'config/connect.php';
session_start();
$mod = $_GET['id'];
$id = $_SESSION['id'];

$sql = "DELETE FROM modele WHERE id=".$mod;
$conn->query($sql);
header('Location: listeCategorieAdmin.php');

?>