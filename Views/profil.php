<?php

include '../Class/Joueur.php';

// On récupère nos variables de session
if (isset($_SESSION['email']) && isset($_SESSION['mdp'])) {

	// On teste pour voir si nos variables ont bien été enregistrées
	echo '<html>';
	echo '<head>';
	echo '<title>Page de notre section membre</title>';
	echo '</head>';

	echo '<body>';
  ?><center><h1><?php
	echo 'Ton email est '.$_SESSION['email'].' mon loulou!';
	echo '<br />';
  ?></h1></center><?php

}
else {
	echo 'Les variables ne sont pas déclarées.';
}
?>
