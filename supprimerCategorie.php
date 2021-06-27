<?php

include 'config/connect.php';
session_start();
$cat = $_GET['cat'];

$sql = "DELETE FROM categorie WHERE id=".$cat;
$conn->query($sql);
header('Location: listeCategorieAdmin');
?>