
<form method="post" action="modification.php">
        <fieldset> <legend>Modification d'une page</legend> 
            ID: <input type="text" name="id" size="3" value='<?php $id= $_POST['id']; echo $id; ?>'>
        <label for="num">Type Batiment:</label>
        <select name="type"> 
            <option value="Appartement">Appartement</option>
            <option value="Maison">Maison</option>
            <option value="Locaux Commerciaux">Locaux Commerciaux</option>
            <option value="Immeubles">Immeubles</option>
            <option value="Terrain Nus">Terrain Nus</option>
        </select>
            <?php include_once '../fonctions.php'; $id= $_POST['id']; $pdo=  connexion(); $contenu="type"; echo affichage($pdo, $id, $contenu); ?>
        <br>
        <label for="num">Jardin:</label>
        <select name="jardin">
            <option value="non">non</option>
            <option value="oui">oui</option>
        </select>
            <?php include_once '../fonctions.php'; $id= $_POST['id']; $pdo=  connexion(); $contenu="jardin"; echo affichage($pdo, $id, $contenu);?>
        <br>
        
        Nombre de pieces : <input type="text" name="piece" size="12">
            <?php include_once '../fonctions.php'; $id= $_POST['id']; $pdo=  connexion(); $contenu="piece"; echo affichage($pdo, $id, $contenu);?>
        <br>
        
        Surface: <input type="text" name="surface" size="12">
            <?php include_once '../fonctions.php'; $id= $_POST['id']; $pdo=  connexion(); $contenu="surface"; echo affichage($pdo, $id, $contenu);?>
        <br>
        
        Prix: <input type="text" name="prix" size="12">
            <?php include_once '../fonctions.php'; $id= $_POST['id']; $pdo=  connexion(); $contenu="prix"; echo affichage($pdo, $id, $contenu);?>
        <br>
        
        Adresse : <input type="text" name="adresse" size="12">
            <?php include_once '../fonctions.php'; $id= $_POST['id']; $pdo=  connexion(); $contenu="localisation"; echo affichage($pdo, $id, $contenu);?>
        <br>
        
        Information(200 mot max): <input type="text" name="info" size="300">
            <?php include_once '../fonctions.php'; $id= $_POST['id']; $pdo=  connexion(); $contenu="info"; echo affichage($pdo, $id, $contenu);?>
        <br>
        
        Nom image (ex:salon.png): <input type="text" name="image" size="12">
            <?php include_once '../fonctions.php'; $id= $_POST['id']; $pdo=  connexion(); $contenu="image"; echo affichage($pdo, $id, $contenu);?>
        <br>
        <input type="submit" value="OK">
            </fieldset>
        </form>