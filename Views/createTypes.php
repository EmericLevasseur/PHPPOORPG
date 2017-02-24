
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
<form method="post" action="../Traitements/createTypes.traitement.php">

    <fieldset>
        <legend>Création d'une Classe</legend> <!-- Titre du fieldset -->
        <p>
            <label for="nom">Quel est son nom ?</label>
            <input type="text" name="nom" id="nom" />
        </p>

        <h5>D'autres options seront ajoutées dans les prochaines mises à jour ;)</h5>

        <br />

        <input type="submit" value="Valider" class="valider" />
    </fieldset>
</form>

</body>
</html>
