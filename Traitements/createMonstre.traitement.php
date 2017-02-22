<?php

require_once ('config.php');

    if(isset($_POST['nom']) AND isset($_POST['pdv']) AND isset($_POST['pdd']) AND isset($_POST['pda']) AND isset($_POST['pdvit']))
    {
      if($_POST['nom'] == NULL)
      {
          echo 'Vous devez entrer un nom';
      } elseif($_POST['pdv'] == NULL)
      {
          echo 'Vous devez entrer ses points de vie';
      } elseif($_POST['pdd'] == NULL)
      {
          echo 'Vous devez entrer ses points de défense';
      } elseif($_POST['pda'] == NULL)
      {
          echo "Vous devez entrer ses points d'attaque";
      } elseif($_POST['pdvit'] == NULL)
      {
          echo 'Vous devez entrer ses points de vitesse';
      } else {
        $req = $bdd->prepare('INSERT INTO Personnage(nom ,pdv, pdd, pda, pdvit) VALUES(:nom, :pdv, :pdd, :pda, :pdvit)');
        $req->execute(array(
        'nom' => $_POST['nom'],
        'pdv' => $_POST['pdv'],
        'pdd' => $_POST['pdd'],
        'pda' => $_POST['pda'],
        'pdvit' => $_POST['pdvit'],
        ));

        header('Location: createMonstre.php');
      }


    }




?>
