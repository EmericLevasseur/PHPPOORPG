<?php
include 'Connexion.php';

class Niveau
{
  private $id             ='';
  public $numeroSalle     ='';
  public $porte           ='';
  public $id_coffre       ='';

  public function __construct($id = null)
  {
    $this->db = new Connexion();
    $this->db = $this->db->dbConnect();
    $this->id = $id;

    if($this->id != null){
      $sql = 'select * from Niveau where idNiveau = :id' ;
      	$aParamUser				=	[
      		':id'			=>	$this->id,
      	];
      	$oQuery					=	$this->db->prepare( $sql );
      	$oQuery->execute( $aParamUser );
      	$aUser					=	$oQuery->fetch();
    }
      $this->save();
  }
  public function getNiveau()
  {
      $sql      = 'SELECT * FROM Niveau';
      $oQuery   = $this->db->prepare($sql);
      $oQuery->execute();
      $aGetNiveau	=	$oQuery->fetchAll();
      return $aGetNiveau;

  }

  public function printNumeroSalle()
  {
      echo $this->getNumeroSalle();
  }
  public function save()
  {
  //  global $bdd;
    if(empty($aUser) && (!empty($_POST['numeroSalle'])) && (!empty($_POST['porte'])) && (!empty($_POST['id_coffre']))){
      //$sQuery				=	;
      $aParamUser			=	[
      ':numeroSalle'			=>	$_POST['numeroSalle'],
      ':porte'				    =>	$_POST['porte'],
      ':id_coffre'				=>	$_POST['id_coffre'],
      ];
      $oQuery	=	$this->db->prepare ( 'INSERT INTO `Niveau`(`numeroSalle`,`porte`,`id_coffre`) VALUES (:numeroSalle,:porte,:id_coffre);' );
      $bReturn = $oQuery->execute( $aParamUser );
    }else{
      global $bdd;
      if(!empty($aUser) && (!empty($_POST['numeroSalle'])) && (!empty($_POST['porte'])) && (!empty($_POST['id_coffre']))){
        $aParamUser			=	[
        ':numeroSalle'			=>	$_POST['numeroSalle'],
        ':porte'				    =>	$_POST['porte'],
        ':id_coffre'				=>	$_POST['id_coffre'],
        ':idNiveau'				=>	$aUser['idNiveau'],
        ];
        $oQuery	=	$this->db->prepare ( 'UPDATE Niveau SET numeroSalle = :numeroSalle, porte = :porte, id_coffre = :id_coffre WHERE idNiveau = :idNiveau' );
        $bReturn = $oQuery->execute( $aParamUser );
    }

  }

}
}
