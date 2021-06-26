<?php

include 'config/connect.php';
session_start();
$_SESSION["mail"]=$_POST["mail"];
$_SESSION["mdp"]=$_POST["mdp"];
// Create database
$sql = "SELECT * FROM utilisateur WHERE mail = '".$_SESSION['mail']."' and id IN (SELECT id FROM client)";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      if ($_SESSION["mdp"] == $row["mdp"]){
          $_SESSION["prenom"] = $row["prenom"];
          $_SESSION["nom"] = $row["nom"];
          $_SESSION["id"] = $row["id"];
          header('Location: home.php');
          echo "ui";
      }
      else {
        header('Location: index.php');
        echo "no";
      }
  }
}

$sql = "SELECT * FROM utilisateur WHERE mail = '".$_SESSION['mail']."' and id IN (SELECT id FROM admin)";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      if ($_SESSION["mdp"] == $row["mdp"]){
          $_SESSION["prenom"] = $row["prenom"];
          $_SESSION["nom"] = $row["nom"];
          $_SESSION["id"] = $row["id"];
          header('Location: homeAdmin.php');
          echo "ui";
      }
      else {
        header('Location: index.php');
        echo "no";
      }
  }
}
?>