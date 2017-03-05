<?php
require_once '../Class/Personnage.php';
require_once '../Traitements/game.traitement.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
  </head>
  <body>

      <?php

      if(isset($_GET['salle'])){
        if(!empty($monstre) && $_GET['salle'] == 'Observer' && $viemonstre >= 0){
          if($_GET['action'] != 'Attaquer' && $_GET['action'] != 'Attaquer1')
          { ?>
            <a href="startgame.php?id=<?php echo $_GET['id']; ?>&salle=Observer&idSalle=<?php echo $idSalle; ?>&action=Attaquer">Attaquer</a>
        <?php  }elseif($_GET['action'] == 'Attaquer')
          { ?>
            <a href="startgame.php?id=<?php echo $_GET['id']; ?>&salle=Observer&idSalle=<?php echo $idSalle; ?>&action=Attaquer1">Attaquer</a>
        <?php  }elseif($_GET['action'] == 'Attaquer1')
            { ?>
              <a href="startgame.php?id=<?php echo $_GET['id']; ?>&salle=Observer&idSalle=<?php echo $idSalle; ?>&action=Attaquer2">Attaquer</a>
        <?php    } ?>
          <a href="startgame.php?id=<?php echo $_GET['id']; ?>&salle=Observer&idSalle=<?php echo $idSalle; ?>&action=Defendre">Défendre</a>
          <a href="startgame.php?id=<?php echo $_GET['id']; ?>&salle=Observer&idSalle=<?php echo $idSalle; ?>&action=Fuir">Fuir</a>
        <?php  } ?>

        <?php if(!empty($coffre['id_coffre'])){ ?>
        <a href="startgame.php?id=<?php echo $_GET['id']; ?>&salle=Observer&idSalle=<?php echo $idSalle; ?>&action=Ouvrir">Ouvrir un coffre</a>
        <?php  }
      }

      if(isset($_GET['salle']) && $_GET['salle'] == 'Observer')
      {
        $cle == null;?>

        <a href="startgame.php?id=<?php echo $_GET['id']; ?>&action=Avancer&idSalle=<?php echo ($idSalle + 1); ?>">Avancer</a>

<?php } ?>
      <a href="startgame.php?id=<?php echo $_GET['id']; ?>&salle=Observer&idSalle=<?php echo $idSalle; ?>">Observer</a>


      <textarea name="name" rows="8" cols="60"><?php if(!empty($text)){echo $text;}else{echo '';} ?></textarea>




<?php
if(isset($_GET['action'])){


if($_GET['action'] == 'Attaquer')
{ ?>
  <table>
    <tr>
      <td>Nom du héros</td>
      <td>Points de vie</td>
      <td>Points de d'attaque</td>
      <td>Points de de défense</td>
      <td>Points de magie</td>
    </tr>
    <tr>
      <td><?php echo $heroNom['nom']; ?></td>
      <td><?php if(isset($dmgsubi)){echo $vie = $heros->pdv() - $dmgsubi;}else{echo $vie = $heros->pdv();} ?></td>
      <td><?php if(!empty($heros->pda())){ echo $heros->pda(); }else{echo 0;}?></td>
      <td><?php if(!empty($heros->pdd())){ echo $heros->pdd(); }else{echo 0;}?></td>
      <td><?php if(!empty($heros->pdm())){ echo $heros->pdm(); }elseif(null == $heros->pdm()){ echo $heros->pdm(); }else{echo 0;}?></td>
    </tr>
  </table>
<?php }elseif($_GET['action'] == 'Attaquer1'){ ?>
  <table>
    <tr>
      <td>Nom du héros</td>
      <td>Points de vie</td>
      <td>Points de d'attaque</td>
      <td>Points de de défense</td>
      <td>Points de magie</td>
    </tr>
    <tr>
      <td><?php echo $heroNom['nom']; ?></td>
      <td><?php if(isset($dmgsubi)){echo $vie = $vie - $dmgsubi;}else{echo $vie;} ?></td>
      <td><?php if(!empty($heros->pda())){ echo $heros->pda(); }else{echo 0;}?></td>
      <td><?php if(!empty($heros->pdd())){ echo $heros->pdd(); }else{echo 0;}?></td>
      <td><?php if(!empty($heros->pdm())){ echo $heros->pdm(); }elseif(null == $heros->pdm()){ echo $heros->pdm(); }else{echo 0;}?></td>
    </tr>
  </table>
<?php }elseif($_GET['action'] == 'Attaquer2'){ ?>
  <table>
    <tr>
      <td>Nom du héros</td>
      <td>Points de vie</td>
      <td>Points de d'attaque</td>
      <td>Points de de défense</td>
      <td>Points de magie</td>
    </tr>
    <tr>
      <td><?php echo $heroNom['nom']; ?></td>
      <td><?php if(isset($dmgsubi)){echo $vie = $vie - $dmgsubi;}else{echo $vie;} ?></td>
      <td><?php if(!empty($heros->pda())){ echo $heros->pda(); }else{echo 0;}?></td>
      <td><?php if(!empty($heros->pdd())){ echo $heros->pdd(); }else{echo 0;}?></td>
      <td><?php if(!empty($heros->pdm())){ echo $heros->pdm(); }elseif(null == $heros->pdm()){ echo $heros->pdm(); }else{echo 0;}?></td>
    </tr>
  </table>
<?php } ?>



<?php if(!empty($monstre)){
?>
<?php if($_GET['action'] == 'Attaquer')
{ ?>
  <table>
    <tr>
      <td>Nom du Monstre</td>
      <td>Points de vie</td>
      <td>Points de d'attaque</td>
      <td>Points de de défense</td>
      <td>Points de magie</td>
    </tr>
    <tr>
      <td><?php echo $monstre['nom']; ?></td>
      <td><?php if(isset($dmg)){echo $unMonstre->pdv() - $dmg;}else{echo $unMonstre->pdv();} ?></td>
      <td><?php if(!empty($unMonstre->pda())){ echo $unMonstre->pda(); }else{echo 0;}?></td>
      <td><?php if(!empty($unMonstre->pdd())){ echo $unMonstre->pdd(); }else{echo 0;}?></td>
      <td><?php if(!empty($unMonstre->pdm())){ echo $unMonstre->pdm(); }elseif(null == $unMonstre->pdm()){ echo $unMonstre->pdm(); }else{echo 0;}?></td>
    </tr>
  </table>
<?php }elseif($_GET['action'] == 'Attaquer1'){ ?>
  <table>
    <tr>
      <td>Nom du Monstre</td>
      <td>Points de vie</td>
      <td>Points de d'attaque</td>
      <td>Points de de défense</td>
      <td>Points de magie</td>
    </tr>
    <tr>
      <td><?php echo $monstre['nom']; ?></td>
      <td><?php if(isset($dmg)){echo $viemonstre = $viemonstre - $dmg;}else{echo $vie;} ?></td>
      <td><?php if(!empty($unMonstre->pda())){ echo $unMonstre->pda(); }else{echo 0;}?></td>
      <td><?php if(!empty($unMonstre->pdd())){ echo $unMonstre->pdd(); }else{echo 0;}?></td>
      <td><?php if(!empty($unMonstre->pdm())){ echo $unMonstre->pdm(); }elseif(null == $unMonstre->pdm()){ echo $unMonstre->pdm(); }else{echo 0;}?></td>
    </tr>
  </table>
  <?php }elseif($_GET['action'] == 'Attaquer2'){ ?>
    <table>
      <tr>
        <td>Nom du Monstre</td>
        <td>Points de vie</td>
        <td>Points de d'attaque</td>
        <td>Points de de défense</td>
        <td>Points de magie</td>
      </tr>
      <tr>
        <td><?php echo $monstre['nom']; ?></td>
        <td><?php if(isset($dmg)){echo $viemonstre = $viemonstre - $dmg;}else{echo $vie;} ?></td>
        <td><?php if(!empty($unMonstre->pda())){ echo $unMonstre->pda(); }else{echo 0;}?></td>
        <td><?php if(!empty($unMonstre->pdd())){ echo $unMonstre->pdd(); }else{echo 0;}?></td>
        <td><?php if(!empty($unMonstre->pdm())){ echo $unMonstre->pdm(); }elseif(null == $unMonstre->pdm()){ echo $unMonstre->pdm(); }else{echo 0;}?></td>
      </tr>
    </table>
    <?php }
}
} ?>

    </body>
  </html>
