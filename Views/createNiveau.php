<?php include 'createNiveau.traitement.php'; ?>

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
    <form method="post" action="createNiveau.php">

       <fieldset>
           <legend>Création d'un niveau</legend> <!-- Titre du fieldset -->
    <p>
           <label for="numeroSalle">Quel est son numéro de salle ?</label>
           <input type="text" name="numeroSalle" id="numeroSalle" />
    </p>

    <p>
           <label for="porte">Combien a t-il de portes ?</label>
           <input type="text" name="porte" id="porte" />
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
