<?php

session_start ();


class Connexion {

  public function dbConnect(){
    return new PDO('mysql:host=localhost;dbname=phppoo', 'root', 'root');

  }
}

?>
