<?php

include 'config/connect.php';
session_start();
$_SESSION["nom"]=$_POST["nom"];
$_SESSION["prenom"]=$_POST["prenom"];
$_SESSION["mail"]=$_POST["mail"];
$_SESSION["mdp"]=$_POST["mdp"];
$_SESSION["date"]=$_POST["date"];
$_SESSION["tel"]=$_POST["tel"];
$_SESSION["adresse"]=$_POST["adresse"];
$_SESSION["ville"]=$_POST["ville"];
$_SESSION["cp"]=$_POST["cp"];
// Create database
$sql = "INSERT INTO adresse (id, rue, ville, cp) VALUES (NULL, '".$_SESSION['adresse']."', '".$_SESSION['ville']."', '".$_SESSION['cp']."')";
$conn->query($sql);

$sql = "SELECT id FROM adresse WHERE rue = '".$_SESSION['adresse']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $sql = "INSERT INTO client VALUES (NULL, '".$_SESSION['nom']."', '".$_SESSION['prenom']."', '".$_SESSION['mail']."', '".$_SESSION['mdp']."', '".$_SESSION['date']."', '".$_SESSION['tel']."', '".$row['id']."')";
    $conn->query($sql);
  }
}
header('Location: index');
?>