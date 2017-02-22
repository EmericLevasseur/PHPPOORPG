<?php

include 'Connexion.php';

class Log {

  public $db;


  public function __construct(){
    $this->db = new Connexion();
    $this->db = $this->db->dbConnect();

  }

public function Login($email, $mdp){
  if(!empty($email) && !empty($mdp)){
    $log = $this->db->prepare("SELECT * FROM Joueur WHERE email=? and mdp=?");
    $log->bindParam(1, $email);
    $log->bindParam(2, $mdp);
    $log->execute();

    if($log->rowCount() == 1){
        echo "Utilisateur vérifié";
    } else {
        echo "Erreur 1";
        }
      }
      else {
        echo "Erreur 2";
      }
    }
  }
