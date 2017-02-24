<?php
include '../Class/Joueur.php';
include '../Traitements/joueur.traitement.php';
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
$joueur = new Joueur();
$aJoueur = $joueur->getJoueur();
?>
<table>
    <tr>
        <td>ID</td>
        <td>Nom</td>
        <td>Prénom</td>
        <td>Pseudo</td>
        <td>Email</td>
        <td>Descriptif</td>
        <td>Mot de Passe</td>

    </tr>
    <?php
    foreach($aJoueur as $ajoueur)
    { ?>
        <tr>
            <td> <a href="joueurview.php?id=<?php echo $ajoueur['idJoueur'] ?>"><?php if(empty($ajoueur['idJoueur'])){echo 'null';}else{ echo $ajoueur['idJoueur'];}?></a></td>
            <td><?php if(empty($ajoueur['nom'])){echo 'null';}else{ echo $ajoueur['nom'];}?></td>
            <td><?php if(empty($ajoueur['prenom'])){echo 'null';}else{ echo $ajoueur['prenom'];}?></td>
            <td><?php if(empty($ajoueur['pseudo'])){echo 'null';}else{ echo $ajoueur['pseudo'];}?></td>
            <td><?php if(empty($ajoueur['email'])){echo 'null';}else{ echo $ajoueur['email'];}?></td>
            <td><?php if(empty($ajoueur['descriptif'])){echo 'null';}else{ echo $ajoueur['descriptif'];}?></td>
            <td><?php if(empty($ajoueur['mdp'])){echo 'null';}else{ echo $ajoueur['mdp'];}?></td>
            <td>
                <form class="" action="../Traitements/joueur.traitement.php?id=<?php echo $ajoueur['idJoueur'] ?>" method="post">
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
