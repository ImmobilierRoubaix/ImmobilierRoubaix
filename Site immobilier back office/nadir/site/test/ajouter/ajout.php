
<form method="post" action="ajouter/ajoutpage.php">
        <fieldset> <legend>Creation d'une page</legend>   
        <label for="num">Type Batiment:</label>
        <select name="type"> 
            <option value="Appartement">Appartement</option>
            <option value="Maison">Maison</option>
            <option value="Locaux Commerciaux">Locaux Commerciaux</option>
            <option value="Immeubles">Immeubles</option>
            <option value="Terrain Nus">Terrain Nus</option>
        </select><br>
        <label for="num">Jardin:</label>
        <select name="jardin">
            <option value="non">non</option>
            <option value="oui">oui</option>
        </select><br>
        Nombre de pieces : <input type="text" name="piece" size="12"><br>
        Surface: <input type="text" name="surface" size="12"><br>
        Prix: <input type="text" name="prix" size="12"><br>
        Adresse : <input type="text" name="adresse" size="12"><br>
        Information(200 mot max): <input type="text" name="info" size="300"><br>
        Nom image (ex:salon.png): <input type="text" name="image" size="12"><br>
        <input type="submit" value="OK">
            </fieldset>
        </form>