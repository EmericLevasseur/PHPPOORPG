
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

        <p>
            <label for="pdv">Combien a t-il de points de vie ?</label>
            <input type="text" name="pdv" id="pdv" />
        </p>
        </p>
        <label for="pdd">Combien a t-il de points de défense ?</label>
        <input type="text" name="pdd" id="pdd" />
        <p>
        </p>
        <label for="pda">Combien a t-il de points d'attaque ?</label>
        <input type="text" name="pda" id="pda" />
        <p>
            <label for="pdvit">Combien a t-il de points de vitesse ?</label>
            <input type="text" name="pdvit" id="pdvit" />
        </p>

        <p>
            <label for="pdm">Combien a t-il de points de magie ?</label>
            <input type="text" name="pdm" id="pdm" />
        </p>

        <p>
            <label for="argent">Combien a t-il d'or ?</label>
            <input type="text" name="argent" id="argent" />
        </p>

        <p>
            <label for="argent">Choisissez votre classe ?</label>
            <select class="" name="classe">
              <option value="paladin" selected="">paladin</option>
              <option value="barbare">barbare</option>
              <option value="magicien">magicien</option>
              <option value="gobelin">gobelin</option>
              <option value="magicien noir">magicien noir</option>
              <option value="dragon">dragon</option>
            </select>
        </p>

        <input type="submit" value="Valider" class="valider" />
    </fieldset>
</form>

</body>
</html>
