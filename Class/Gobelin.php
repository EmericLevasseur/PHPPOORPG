<?php
require_once 'Personnage.php';


Class Gobelin extends Personnage
{


  public function pda()
  {
    return $this->pda = 15;
  }
  public function pdd()
  {
    return $this->pdd = 15;
  }


}
