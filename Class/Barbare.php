<?php
require_once 'Personnage.php';


Class Barbare extends Personnage
{


  public function pda()
  {
    return $this->pda = 50;
  }
  public function pdd()
  {
    return $this->pdd = 50;
  }
  public function pdm()
  {
    return $this->pdm = 0;
  }
  public function pdv()
  {
    return $this->pdv = 100;
  }



}
