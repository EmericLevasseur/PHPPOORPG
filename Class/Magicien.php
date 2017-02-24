<?php
require_once 'Personnage.php';


Class Magicien extends Personnage
{


  public function pdm()
  {
    return $this->pdm = 50;
  }
  public function pdd()
  {
    return $this->pdd = 50;
  }


}
