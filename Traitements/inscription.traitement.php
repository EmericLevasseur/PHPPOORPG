<?php

include '../Class/Joueur.php';
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $pseudo = $_POST['pseudo'];
        $email = $_POST['email'];
        $descriptif = $_POST['descriptif'];
        $mdp = $_POST['mdp'];

<<<<<<< Updated upstream
        $joueur->insert();
=======
        $joueur = new Joueur(null,$nom, $prenom, $pseudo, $email, $descriptif, $mdp);
        $joueur->save();
>>>>>>> Stashed changes


?>

Utilisateur créé ! Connectez-vous :
<button type="button"  class="btn btn-info"><a href="../Views/login.php">Login</a></button>
</br>
Retour à l'accueil:
<button type="button"  class="btn btn-info"><a href="../index.php">Accueil</a></button>
