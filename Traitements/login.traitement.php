<?php

include '../Class/Login.php';

        $email = $_POST['email'];
        $mdp = $_POST['mdp'];

        $_SESSION['email'] = $_POST['email'];
        $_SESSION['mdp'] = $_POST['mdp'];

        $co = new Login();

        $co->Login($email, $mdp);

?>

<button type="button"  class="btn btn-info"><a href="../Views/profil.php">Profil</a></button>
