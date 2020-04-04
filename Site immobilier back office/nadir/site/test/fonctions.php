<?php
        function connexion(){ 
        $dsn="mysql:dbname=immobilier;host=localhost;charset=utf8";
        $user="leolio";
        $password="leolio";
        
        try{
         $pdo=new PDO($dsn,$user,$password); 
         
        } 
        catch (PDOException $e) {
            echo'Connexionechoue:'.$e->getMessage();
        }
        return $pdo;
    }

    function addAgence($pdo,$type,$jardin,$nbrpiece,$surface,$prix,$local,$info,$image){
        
        $prepare=$pdo->prepare('INSERT INTO agence VALUES(null,:type,:jardin,:piece,:surface,:prix,:localisation,:info,:image)');
        $prepare->bindvalue(':type',$type);
        $prepare->bindvalue(':jardin',$jardin);
        $prepare->bindvalue(':piece',$nbrpiece);
        $prepare->bindvalue(':surface',$surface);
        $prepare->bindvalue(':prix',$prix);
        $prepare->bindvalue(':localisation',$local);
        $prepare->bindvalue(':info',$info);
        $prepare->bindvalue(':image',$image);
        $okExecution =$prepare->execute();
        return $okExecution; 
    }
    function deleteAgence($pdo,$id){
        $prepare=$pdo->prepare('DELETE FROM agence WHERE id =:id ;');
        $prepare->bindvalue(':id',$id);
        $okExecution =$prepare->execute();
        return $okExecution; 
    }
    
    function modifAgence($pdo,$id,$type,$jardin,$nbrpiece,$surface,$prix,$local,$info,$image){
        $prepare=$pdo->prepare('Update agence set type=:type,jardin=:jardin,piece=:piece,surface=:surface,prix=:prix,localisation=:localisation,information=:info,image=:image where id=:id');
        $prepare->bindvalue(':id',$id);
        $prepare->bindvalue(':type',$type);
        $prepare->bindvalue(':jardin',$jardin);
        $prepare->bindvalue(':piece',$nbrpiece);
        $prepare->bindvalue(':surface',$surface);
        $prepare->bindvalue(':prix',$prix);
        $prepare->bindvalue(':localisation',$local);
        $prepare->bindvalue(':info',$info);
        $prepare->bindvalue(':image',$image);
        $okExecution =$prepare->execute();
        return $okExecution; 
    }

    function donneUtilisateur($pdo,$id,$mdp){
      $prepare=$pdo->prepare('Select * from inscrit where id=:id and mdp=:mdp');
      $prepare->bindvalue(':id',$id);
      $prepare->bindvalue(':mdp',$mdp);
      $exe =$prepare->execute();
      $aff=$prepare->fetchAll();
      return $aff; 
 }
 
    function affichage($pdo,$id,$contenu){
        $prepare=$pdo->prepare('SELECT type,jardin,piece,surface,prix,localisation,Information,image FROM agence where id=:id');
        $prepare->bindvalue(':id',$id);
        $exe =$prepare->execute();
        
        if($contenu=='id'){
            while($row = $prepare->fetch()) {
            $aff= " Id: ". $row["id"]; 
        }}
        if($contenu=='type'){
            while($row = $prepare->fetch()) {
            $aff= " Type du batiment: ". $row["type"]; 
        }}
        if($contenu=='jardin'){
            while($row = $prepare->fetch()) {
            $aff= "Jardin: ". $row["jardin"] ; 
        }}
        if($contenu=='piece'){
            while($row = $prepare->fetch()) {
            $aff= " Nombre de Piece: ". $row["piece"]; 
        }}
        if($contenu=='surface'){
            while($row = $prepare->fetch()) {
            $aff= "Surface: ". $row["surface"]; 
        }}
        if($contenu=='prix'){
            while($row = $prepare->fetch()) {
            $aff= " Prix: ". $row["prix"]; 
        }}
        if($contenu=='localisation'){
            while($row = $prepare->fetch()) {
            $aff= " Localisation: ". $row["localisation"]; 
        }}
        if($contenu=='info'){
            while($row = $prepare->fetch()) {
                $aff= " Information: ". $row["Information"]; 
        }}
        if($contenu=='image'){
            while($row = $prepare->fetch()) {
            $aff= " Image: ". $row["image"]; 
        }}
        return $aff;
    } 