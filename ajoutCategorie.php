<?php

include 'config/connect.php';
session_start();
$nom = $_POST["nom"];

$sql = "INSERT INTO categorie VALUES (NULL, '".$nom."')";
$conn->query($sql);

header('Location: listeCategorieAdmin');

?>