<?php
require_once ('../Class/Joueur.php');




if(!empty($_POST['modifierJoueur']) && (!empty($_GET['id']))){
    $id = $_GET['id'];
    $sJoueur = new Joueur($id,$_POST['nom'],$_POST['prenom'],$_POST['pseudo'], $_POST['email'], $_POST['descriptif'], $_POST['mdp']);
} elseif(!empty($_POST['modifierJoueur'])) {
    $sJoueur = new Joueur(null,$_POST['nom'],$_POST['prenom'],$_POST['pseudo'],$_POST['email'],$_POST['descriptif'],$_POST['mdp']);
}
if(isset($_POST['delete']))
{
    $id = $_GET['id'];
    $joueur = new Joueur($id,null,null,null,null,null,null);
    $joueur->delete();


}
