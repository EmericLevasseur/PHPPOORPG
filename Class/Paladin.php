<?php
require_once 'Personnage.php';


Class Paladin extends Personnage
{
  public function pda()
  {
    return $this->pda = 40;
  }

  public function pdm()
  {
    return $this->pdm = 40;
  }
  public function pdd()
  {
    return $this->pdd = 20;
  }


}
