
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<form method="post" action="../Traitements/createMonstre.traitement.php">

    <fieldset>
        <legend>Création d'un monstre</legend> <!-- Titre du fieldset -->
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

        <br />

        <input type="submit" value="Valider" class="valider" />
    </fieldset>
</form>

</body>
</html>
