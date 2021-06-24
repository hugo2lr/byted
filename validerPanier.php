<?php

include 'config/connect.php';
session_start();
$id = $_SESSION['id'];

$sql = "SELECT * FROM panier, produit, modele Where idclient = ".$id." and panier.idproduit = produit.id and produit.idmodele = modele.id";
if ($result = $conn->query($sql)){
    while ($obj = $result->fetch_object()){
        $sql2 = "SELECT SUM(quantite*prix) AS prix FROM panier, produit, modele where panier.idproduit = produit.id and produit.idmodele = modele.id and idclient = ".$id." and produit.id = ".$obj->idproduit;
                                if ($result2 = $conn->query($sql2)){  
                                    while ($obj2 = $result2->fetch_object()){
                                        $prix = $obj2->prix;
                                }
                            }
             
        // ON CREER LA COMMANDE POUR CHACUN DES PRODUITS DU PANIER
        $sql3 = "INSERT INTO commande VALUES (NULL, '".$id."', '".$obj->idproduit."', '".$obj->quantite."', '".$prix."', '".date("Y-m-d")."')";
        $conn->query($sql3);
        // ON REDUIT LE STOCK DE PRODUIT DE LA QUANTITE ACHETEE
        $sql4 = "UPDATE produit SET stock = stock - ".$obj->quantite." WHERE produit.id = ".$obj->idproduit;
        $conn->query($sql4);
    }
}

// ON VIDE LE PANIER
$sql = "DELETE FROM panier WHERE idclient = ".$id;
$conn->query($sql);

header('Location: home.php');

?>