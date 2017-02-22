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
    $this->id             = $id;

    if($this->id != null){
      $sql = 'select * from Niveau where idNiveau = :id' ;
      	$aParamUser				=	[
      		':id'			=>	$this->id,
      	];
      	$oQuery					=	$this->db->prepare( $sUser );
      	$oQuery->execute( $aParamUser );
      	$aUser					=	$oQuery->fetch();
    }

    $this->save();
  }
  public function getNiveau(){
    $sql = 'select * from Niveau' ;
      $oQuery					=	$this->db->prepare( $sUser );
      $oQuery->execute();
      $aGetUser					=	$oQuery->fetchAll();
      return $aGetUser;

  }

  public function printNumeroSalle()
  {
      echo $this->getNumeroSalle();
  }
  public function save()
  {
  //  global $bdd;
    if(empty($aUser)){
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
      if(empty($aUser)){
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
