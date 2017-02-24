

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
<form class="" action="../Traitements/personnage.traitement.php?id=<?php echo $_GET['id']; ?>" method="post">
    <legend>Création d'un personnage </legend>
    <br>
    <label for="numeroSalle">NOM : </label>
    <input type="text" name="nom" value="" id="numeroSalle"><br></br>

    <label for="porte">Point de défense :</label>
    <input type="text" name="pdd" value="" id="porte"><br></br>

    <label for="id_coffre">Point de vie :</label>
    <input type="text" name="pdv" value="" id="id_coffre"><br></br>

    <label for="id_coffre">Point d'attaque :</label>
    <input type="text" name="pda" value="" id="id_coffre"><br></br>

    <label for="id_coffre">Point de vitesse :</label>
    <input type="text" name="pdvit" value="" id="id_coffre"><br></br>

    <label for="id_coffre">Point de magie :</label>
    <input type="text" name="pdm" value="" id="id_coffre"><br></br>

    <label for="id_coffre">Argent :</label>
    <input type="text" name="argent" value="" id="id_coffre"><br></br>

    <input type="submit" name="modifierPersonnage" value="Enregistrer">

</form>
</body>
</html>
