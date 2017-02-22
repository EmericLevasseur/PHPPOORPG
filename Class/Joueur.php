<?php

include 'Connexion.php';

class Joueur {

  public $nom;
  public $prenom;
  public $pseudo;
  public $email;
  public $descriptif;
  public $mdp;
  private $id;


  public function __construct($nom, $prenom, $pseudo, $email, $descriptif, $mdp, $id = ''){
    $this->nom        = $nom;
    $this->prenom     = $prenom;
    $this->pseudo     = $pseudo;
    $this->email      = $email;
    $this->descriptif = $descriptif;
    $this->mdp        = $mdp;
    $this->id         = $id;

    $this->db = new Connexion();
    $this->db = $this->db->dbConnect();
  }

  public function insert(){

    $sql = $this->db->prepare("INSERT INTO Joueur (nom, prenom, pseudo, email, descriptif, mdp)
            VALUES('$this->nom', '$this->prenom', '$this->pseudo', '$this->email', '$this->descriptif', '$this->mdp')");

    $sql->execute();


  }

  public function updateJoueur(){

  }

  public function deleteJoueur(){

  }


}
