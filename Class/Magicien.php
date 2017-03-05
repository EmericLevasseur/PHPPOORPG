<?php
require_once 'Personnage.php';


Class Magicien extends Personnage
{


  public function pda()
  {
    return $this->pda = 0;
  }
  public function pdm()
  {
    return $this->pdm = 50;
  }
  public function pdd()
  {
    return $this->pdd = 50;
  }
  public function pdv()
  {
    return $this->pdv = 100;
  }


}
