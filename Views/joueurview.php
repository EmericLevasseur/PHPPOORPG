

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
<form class="" action="../Traitements/joueur.traitement.php?id=<?php echo $_GET['id']; ?>" method="post">
    <legend>Création d'un joueur </legend>
    <br>
    <label for="numeroSalle">NOM : </label>
    <input type="text" name="nom" value="" id="numeroSalle"><br></br>

    <label for="porte">Prénom :</label>
    <input type="text" name="prenom" value="" id="porte"><br></br>

    <label for="id_coffre">Pseudo :</label>
    <input type="text" name="pseudo" value="" id="id_coffre"><br></br>

    <label for="id_coffre">Email :</label>
    <input type="text" name="email" value="" id="id_coffre"><br></br>

    <label for="id_coffre">Descriptif :</label>
    <input type="text" name="descriptif" value="" id="id_coffre"><br></br>

    <label for="id_coffre">Mot de Passe :</label>
    <input type="text" name="mdp" value="" id="id_coffre"><br></br>

    <input type="submit" name="modifierJoueur" value="Enregistrer">

</form>
</body>
</html>
