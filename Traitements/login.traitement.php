<?php

include '../Class/Login.php';

        $email = $_POST['email'];
        $mdp = md5($_POST['mdp']);

        $co = new Log();

        $co->Login($email, $mdp);

?>

<button type="button"  class="btn btn-info"><a href="../Views/index.php">Accueil</a></button>
