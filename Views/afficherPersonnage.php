<?php
include '../Class/Personnage.php';
include '../Traitements/personnage.traitement.php';
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
$personnage = new Personnage();
$aPersonnage = $personnage->getPersonnage();
?>
<table>
    <tr>
        <td>ID</td>
        <td>Nom</td>
        <td>Point de défense</td>
        <td>Point de vie</td>
        <td>Point d'attaque</td>
        <td>Point de vitesse</td>
        <td>Point de magie</td>
        <td>Argent</td>

    </tr>
    <?php
    foreach($aPersonnage as $apersonnage)
    { ?>
        <tr>

            <td> <a href="Personnageview.php?id=<?php echo $apersonnage['idPersonnage'] ?>"><?php if(empty($apersonnage['idPersonnage'])){echo 'null';}else{ echo $apersonnage['idPersonnage'];}?></a></td>
            <td><?php if(empty($apersonnage['nom'])){echo 'null';}else{ echo $apersonnage['nom'];}?></td>
            <td><?php if(empty($apersonnage['pdd'])){echo 'null';}else{ echo $apersonnage['pdd'];}?></td>
            <td><?php if(empty($apersonnage['pdv'])){echo 'null';}else{ echo $apersonnage['pdv'];}?></td>
            <td><?php if(empty($apersonnage['pda'])){echo 'null';}else{ echo $apersonnage['pda'];}?></td>
            <td><?php if(empty($apersonnage['pdvit'])){echo 'null';}else{ echo $apersonnage['pdvit'];}?></td>
            <td><?php if(empty($apersonnage['pdm'])){echo 'null';}else{ echo $apersonnage['pdm'];}?></td>
            <td><?php if(empty($apersonnage['argent'])){echo 'null';}else{ echo $apersonnage['argent'];}?></td>
            <td><?php if(empty($apersonnage['id_classe'])){echo 'null';}else{ echo $apersonnage['id_classe'];}?></td>

            <td>
                <form class="" action="../Traitements/personnage.traitement.php?id=<?php echo $apersonnage['idPersonnage'] ?>" method="post">
                    <input type="hidden" name="delete">
                    <button class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    <?php  }
    ?>
</table>
</body>
</html>
