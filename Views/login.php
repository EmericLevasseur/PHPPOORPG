<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
  </head>
  <body>

        <form method="post" id="form" autocomplete="off" action="../Traitements/login.traitement.php" >
          <h1 id="titre">Login</h1>
          <div class="col-lg-6 col-lg-offset-3 champ">
            <input type="email" id="email" name="email" placeholder="Adresse Email"/>
          </div>
          <div class=" col-lg-6 col-lg-offset-3 champ">
            <input type="password" id="mdp" name="mdp" placeholder="Mot de Passe"/>
          </div>
          <div class=" col-lg-4 col-lg-offset-4 bouton">
            <input id="connexion" type="submit" name="submit" value="Login" />
          </div>

        </form>
        <div id="blank" class=" col-lg-4 col-lg-offset-4 bouton">
          <button type="button"  class="btn btn-info"><a href="inscription.php">Pas de compte ?</a></button>
          <button type="button"  class="btn btn-info"><a href="../index.php">Accueil</a></button>
        </div>

  </body>
</html>
