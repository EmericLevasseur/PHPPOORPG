<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
  </head>
  <body>
    <form method="post" action="../Traitements/inscription.traitement.php">

       <fieldset>
           <legend>Inscription</legend> <!-- Titre du fieldset -->
    <p>
           <label for="nom">Quel est votre nom ?</label>
           <input type="text" name="nom" id="nom" />
    </p>
    <p>
           <label for="prenom">Quel est votre prénom ?</label>
           <input type="text" name="prenom" id="prenom" />
    </p>
    </p>
           <label for="prenom">Quel est votre pseudo ?</label>
           <input type="text" name="pseudo" id="pseudo" />
    <p>
    </p>
           <label for="email">Quel est votre e-mail ?</label>
           <input type="email" name="email" id="email" />
    <p>
           <label for="prenom">Votre descriptif ?</label>
           <input type="text" name="descriptif" id="descriptif" />
    </p>
    <p>
          <label for="mdp">Mot de passe</label><br />
          <input type="password" name="mdp" id="mdp" size="30" />
    </p>

    <br />
          <input type="submit" value="Valider" name="submit" />
          <button type="button"  class="btn btn-info"><a href="../index.php">Accueil</a></button>
       </fieldset>
    </form>
  </body>
</html>
