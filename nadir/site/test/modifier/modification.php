<?php
include_once '../fonctions.php';
$id= $_POST['id'];
$type= $_POST['type'];
$jardin = $_POST['jardin'];
$nbrpiece = $_POST['piece'];
$surface = $_POST['surface'];
$prix = $_POST['prix'];
$local = $_POST['adresse'];
$info = $_POST['info'];
$image = $_POST['image'];
$pdo=  connexion();
modifAgence($pdo,$id,$type,$jardin,$nbrpiece,$surface,$prix,$local,$info,$image);
echo 'La page a ete change';