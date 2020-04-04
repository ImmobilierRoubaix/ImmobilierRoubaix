<?php
$id=$_POST['nom'];
$mdp=$_POST['mdp'];
include_once "fonctions.php";       

if(sizeof(donneUtilisateur(connexion(),$id,$mdp))==0  ){
    echo 'Le compte nexiste pas';
}
else{
  echo 'Le compte existe';  
  include_once 'Option.php';
}
