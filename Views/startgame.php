<style>
* {
  margin: 0px;
  padding: 0px;
}

body {
  font: 400 1em/1.5 "Neuton";
  background: #090d00;
  color: white;
  text-decoration: none;
  transition: 0.3s all ease;
  font-family: OCR A Std, monospace;
}


@keyframes backgroundAnimate {
  from {
    left: 0;
    top: 0;
  }
  to {
    left: -10000px;
    top: -2000px;
  }
}

#back {
  background: url(http://www.tranexnet.com/img/back.png) repeat 20% 20%;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  opacity: 0.4;
  z-index: -1;
  -webkit-animation-name: backgroundAnimate;
  -webkit-animation-duration: 500s;
  -webkit-animation-timing-function: linear;
  -webkit-animation-iteration-count: infinite;
  -moz-animation-name: backgroundAnimate;
  -moz-animation-duration: 5s;
  -moz-animation-timing-function: linear;
  -moz-animation-iteration-count: infinite;
  -o-animation-name: backgroundAnimate;
  -o-animation-duration: 500s;
  -o-animation-timing-function: linear;
  -o-animation-iteration-count: infinite;
  animation-name: backgroundAnimate;
  animation-duration: 500s;
  animation-timing-function: linear;
  animation-iteration-count: infinite;
}

#front {
  background: url(http://www.tranexnet.com/img/front.png) repeat 35% 35%;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  opacity: 0.6;
  z-index: -1;
  -webkit-animation-name: backgroundAnimate;
  -webkit-animation-duration: 300s;
  -webkit-animation-timing-function: linear;
  -webkit-animation-iteration-count: infinite;
  -moz-animation-name: backgroundAnimate;
  -moz-animation-duration: 300s;
  -moz-animation-timing-function: linear;
  -moz-animation-iteration-count: infinite;
  -o-animation-name: backgroundAnimate;
  -o-animation-duration: 300s;
  -o-animation-timing-function: linear;
  -o-animation-iteration-count: infinite;
  animation-name: backgroundAnimate;
  animation-duration: 300s;
  animation-timing-function: linear;
  animation-iteration-count: infinite;
}




/* Animate Background Image */
@-webkit-keyframes aitf {
  0% {
    background-position: 0% 50%;
  }
  100% {
    background-position: 100% 50%;
  }
}

}

@import "https://fonts.googleapis.com/css?family=Source+Sans+Pro:700";
*,
*::before,
*::after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

a {
  color: white;
  text-decoration: none;
  transition: 0.3s all ease;
  font-family: OCR A Std, monospace;
}
a:hover {
  color: #B15947;
}
a:focus {
  text-decoration: none;
}
a:active {
  color: #FFF;
}

textarea {
  border-radius: 10px;
}

#gauche {
  margin-left: 50px;
}

#droite {
  float: right !important;
  padding-right: 50px;
}

p.one {
  text-align: right;
}
p span.one {
  float: left;
}

p.two {
  text-align: right;
}
p span.two {
  float: left;
}

</style>

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
    <div id="back"></div>
  </br></br>
<center>
      <?php

      if(isset($_GET['salle'])){
        if(!empty($monstre) && $_GET['salle'] == 'Observer'){
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
        ?>

        <a href="startgame.php?id=<?php echo $_GET['id']; ?>&action=Avancer&idSalle=<?php echo ($idSalle + 1); ?>">Avancer</a>

<?php } ?>
      <a href="startgame.php?id=<?php echo $_GET['id']; ?>&salle=Observer&idSalle=<?php echo $idSalle; ?>&action=">Observer</a>
    </br></br>


      <textarea name="name" rows="8" cols="60"><?php if(!empty($text)){echo $text;}else{echo '';} ?></textarea></br></br>
</center>



<?php


if($_GET['action'] == 'Attaquer' || $_GET['action'] == '')
{ ?>
  <div id="gauche">
    <p class="one"><span class="one">
     <img src="pp.gif" width="150px" alt="Photo" /></br></br>
      Nom du héros : <?php echo $heroNom['nom']; ?></br>
      Points de vie : <?php if(isset($dmgsubi)){echo $vie = $heros->pdv() - $dmgsubi;}else{echo $vie = $heros->pdv();} ?></br>
      Points de d'attaque : <?php if(isset($dmgsubi)){echo $vie = $heros->pdv() - $dmgsubi;}else{echo $vie = $heros->pdv();} ?></br>
      Points de de défense : <?php if(!empty($heros->pdd())){ echo $heros->pdd(); }else{echo 0;}?></br>
      Points de magie : <?php if(!empty($heros->pdm())){ echo $heros->pdm(); }elseif(null == $heros->pdm()){ echo $heros->pdm(); }else{echo 0;}?></br></br></br>


<p class="two"><span class="two">
<?php }elseif($_GET['action'] == 'Attaquer1'){ ?>
  <img src="pp.gif" width="150px" alt="Photo" /></br></br>
  Nom du héros : <?php echo $heroNom['nom']; ?></br>
  Points de vie : <?php if(isset($dmgsubi)){echo $vie = $heros->pdv() - $dmgsubi;}else{echo $vie = $heros->pdv();} ?></br>
  Points de d'attaque : <?php if(isset($dmgsubi)){echo $vie = $heros->pdv() - $dmgsubi;}else{echo $vie = $heros->pdv();} ?></br>
  Points de de défense : <?php if(!empty($heros->pdd())){ echo $heros->pdd(); }else{echo 0;}?></br>
  Points de magie : <?php if(!empty($heros->pdm())){ echo $heros->pdm(); }elseif(null == $heros->pdm()){ echo $heros->pdm(); }else{echo 0;}?></br></br></br>



<?php }elseif($_GET['action'] == 'Attaquer2'){ ?>
  <img src="pp.gif" width="150px" alt="Photo" /></br></br>
  Nom du héros : <?php echo $heroNom['nom']; ?></br>
  Points de vie : <?php if(isset($dmgsubi)){echo $vie = $heros->pdv() - $dmgsubi;}else{echo $vie = $heros->pdv();} ?></br>
  Points de d'attaque : <?php if(isset($dmgsubi)){echo $vie = $heros->pdv() - $dmgsubi;}else{echo $vie = $heros->pdv();} ?></br>
  Points de de défense : <?php if(!empty($heros->pdd())){ echo $heros->pdd(); }else{echo 0;}?></br>
  Points de magie : <?php if(!empty($heros->pdm())){ echo $heros->pdm(); }elseif(null == $heros->pdm()){ echo $heros->pdm(); }else{echo 0;}?></br></br></br>

</span></div>

<?php } ?>



<?php if(!empty($monstre)){
?>
<?php if($_GET['action'] == 'Attaquer' || $_GET['action'] == '')
{ ?>

  <div id="droite">
  </br>
     <img src="monstre.gif" width="150px" alt="Photo" /></br></br>
      Nom du Monstre : <?php echo $monstre['nom']; ?></br>
      Points de vie : <?php if(isset($dmg)){echo $unMonstre->pdv() - $dmg;}else{echo $unMonstre->pdv();} ?></br>
      Points de d'attaque : <?php if(!empty($unMonstre->pda())){ echo $unMonstre->pda(); }else{echo 0;}?></br>
      Points de de défense : <?php if(!empty($unMonstre->pdd())){ echo $unMonstre->pdd(); }else{echo 0;}?></br>
      Points de magie : <?php if(!empty($unMonstre->pdm())){ echo $unMonstre->pdm(); }elseif(null == $unMonstre->pdm()){ echo $unMonstre->pdm(); }else{echo 0;}?></br>
</p>
<?php }elseif($_GET['action'] == 'Attaquer1'){ ?>
    <img src="monstre.gif" width="150px" alt="Photo" /></br></br>
    Nom du Monstre : <?php echo $monstre['nom']; ?></br>
    Points de vie : <?php if(isset($dmg)){echo $unMonstre->pdv() - $dmg;}else{echo $unMonstre->pdv();} ?></br>
    Points de d'attaque : <?php if(!empty($unMonstre->pda())){ echo $unMonstre->pda(); }else{echo 0;}?></br>
    Points de de défense : <?php if(!empty($unMonstre->pdd())){ echo $unMonstre->pdd(); }else{echo 0;}?></br>
    Points de magie : <?php if(!empty($unMonstre->pdm())){ echo $unMonstre->pdm(); }elseif(null == $unMonstre->pdm()){ echo $unMonstre->pdm(); }else{echo 0;}?></br>
</p>
  <?php }elseif($_GET['action'] == 'Attaquer2'){ ?>
    <img src="monstre.gif" width="150px" alt="Photo" /></br></br>
    Nom du Monstre : <?php echo $monstre['nom']; ?></br>
    Points de vie : <?php if(isset($dmg)){echo $unMonstre->pdv() - $dmg;}else{echo $unMonstre->pdv();} ?></br>
    Points de d'attaque : <?php if(!empty($unMonstre->pda())){ echo $unMonstre->pda(); }else{echo 0;}?></br>
    Points de de défense : <?php if(!empty($unMonstre->pdd())){ echo $unMonstre->pdd(); }else{echo 0;}?></br>
    Points de magie : <?php if(!empty($unMonstre->pdm())){ echo $unMonstre->pdm(); }elseif(null == $unMonstre->pdm()){ echo $unMonstre->pdm(); }else{echo 0;}?></br>
</div>
    <?php }
} ?>

    </body>
  </html>
