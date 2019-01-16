<?php
/**
 *
 */
class virementController extends dataBase
{
  private $_db;
  
  public function setDb($connection)
  {
    $this->_db = $connection;
  }
  
  public function getDb()
  {
    return $this->_db;
  }
  
  public function addVirement($montant,$destinataire)
  {
    $query = $this->getDb()->prepare("UPDATE comptes SET nom = :$destinataire, solde = :$montant");
    
    require "view/virementView.php";
  }
}
?>