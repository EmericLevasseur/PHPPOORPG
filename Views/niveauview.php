

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
    <form class="" action="../Traitements/niveau.traitement.php?id=<?php echo $_GET['id']; ?>" method="post">
      <legend>Création d'un niveau </legend>
      <br>
      <label for="numeroSalle">Numero de salle : </label>
      <input type="text" name="numeroSalle" value="" id="numeroSalle"><br></br>

      <label for="porte">Nombre de Porte :</label>
      <input type="text" name="porte" value="" id="porte"><br></br>

      <label for="id_coffre">Coffre :</label>
      <input type="text" name="id_coffre" value="" id="id_coffre"><br></br>

      <input type="submit" name="modifierNiveau" value="Enregistrer">

    </form>
  </body>
</html>
