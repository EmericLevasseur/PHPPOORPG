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


}
