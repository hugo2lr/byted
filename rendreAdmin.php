<?php

include 'config/connect.php';
session_start();
$idclient = $_GET['id'];

$sql = "DELETE FROM client WHERE id=".$idclient;
$conn->query($sql);
$sql = "INSERT INTO admin VALUES ('".$idclient."')";
$conn->query($sql);
header('Location: clients.php');

?>