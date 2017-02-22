<?php

include '../Class/Login.php';

        $email = $_POST['email'];
        $mdp = md5($_POST['mdp']);

        $co = new Login();

        $co->Login($email, $mdp);

?>

<button type="button"  class="btn btn-info"><a href="../index.php">Accueil</a></button>
