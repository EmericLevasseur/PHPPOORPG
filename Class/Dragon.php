<?php
require_once 'Personnage.php';


Class Dragon extends Personnage
{


  public function pda()
  {
    return $this->pda = 35;
  }
  public function pdd()
  {
    return $this->pdd = 35;
  }
  public function pdm()
  {
    return $this->pdm = 0;
  }


}
