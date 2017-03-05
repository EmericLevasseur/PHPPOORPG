
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>
<form method="post" action="../Traitements/createHero.traitement.php">

    <fieldset>
        <legend>Création d'un héro</legend> <!-- Titre du fieldset -->
        <p>
            <label for="nom">Quel est son nom ?</label>
            <input type="text" name="nom" id="nom" />
        </p>

        <br />
            <label for="argent">Choisissez votre classe ?</label>
            <select class="" name="classe">
              <option value="paladin" selected="">paladin</option>
              <option value="barbare">barbare</option>
              <option value="magicien">magicien</option>
              <option value="gobelin">gobelin</option>
              <option value="magicien noir">magicien noir</option>
              <option value="dragon">dragon</option>
            </select>
        <br />

        <br />
        <br />

        <input type="submit" value="Valider" class="valider" />
    </fieldset>
</form>

</body>
</html>
