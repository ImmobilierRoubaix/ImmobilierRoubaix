<?php

$option=$_POST['option'];
if($option==1){
    include_once 'ajouter/ajout.php';
    
}
if($option==2){
    include_once 'modifier/modif.php';
}
if($option==3){
    include_once 'effacer/sup.php';
}