<?php

class Connexion {

  public function dbConnect(){
    return new PDO('mysql:host=localhost;dbname=phppoo', 'root', 'root');

  }
}

?>
