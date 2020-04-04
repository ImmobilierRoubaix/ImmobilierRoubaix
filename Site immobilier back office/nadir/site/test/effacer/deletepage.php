<?php
include_once '../fonctions.php';
$id= $_POST['id'];
$pdo=  connexion();
deleteAgence($pdo, $id);
echo 'La page a bien ete supprime';