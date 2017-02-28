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
    <a href="startgame.php?id=<?php echo $_GET['id']; ?>&action=Observer">Observer</a>
    <a href="startgame.php?id=<?php echo $_GET['id']; ?>&action=Attaquer">Attaquer</a>
    <a href="startgame.php?id=<?php echo $_GET['id']; ?>&action=Defendre">Défendre</a>
    <a href="startgame.php?id=<?php echo $_GET['id']; ?>&action=Ouvrir">Ouvrir un coffre</a>
    <a href="startgame.php?id=<?php echo $_GET['id']; ?>&action=Fuir">Fuir</a>
    <a href="startgame.php?id=<?php echo $_GET['id']; ?>&action=Avancer">Avancer</a>
  </body>
</html>
