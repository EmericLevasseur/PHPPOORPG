<?php
include '../Class/Niveau.php';
include '../Traitements/niveau.traitement.php';
?>
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
      <?php
    $niveau = new Niveau();
    $aNiveau = $niveau->getNiveau();
    ?>
    <table>
      <tr>
        <td>Id</td>
        <td>Numero Salle</td>
        <td> Porte </td>
        <td> Id coffre</td>
      </tr>
      <?php
      foreach($aNiveau as $aniveau)
      { ?>
        <tr>
          <td> <a href="niveauview.php?id=<?php echo $aniveau['idNiveau'] ?>"><?php if(empty($aniveau['idNiveau'])){echo 'null';}else{ echo $aniveau['idNiveau'];}?></a></td>
          <td><?php if(empty($aniveau['numeroSalle'])){echo 'null';}else{ echo $aniveau['numeroSalle'];}?></td>
          <td><?php if(empty($aniveau['numeroSalle'])){echo 'null';}else{ echo $aniveau['porte'];}?></td>
          <td><?php if(empty($aniveau['id_coffre'])){echo 'null';}else{ echo $aniveau['id_coffre'];}?></td>
          <td>
            <form class="" action="../Traitements/niveau.traitement.php?id=<?php echo $aniveau['idNiveau'] ?>" method="post">
              <input type="hidden" name="delete">
              <input type="text" name="connard" value="3">
              <button class="btn btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      <?php  }
        ?>
    </table>
  </body>
</html>
