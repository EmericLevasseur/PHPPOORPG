<?php
require_once 'Personnage.php';


Class MagicienNoir extends Personnage
{


  public function pda()
  {
    return $this->pda = 25;
  }
  public function pdd()
  {
    return $this->pdd = 25;
  }
  public function pdm()
    {
      return $this->pdm = 0;
    }


}
