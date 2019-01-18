<?php

class compte extends entity
{
  protected $numero;
  protected $type;
  protected $solde;



  public function setNumero($numero) {
    $this->numero = $numero;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function setSolde($solde) {
    $this->solde = $solde;
  }

  public function getNumero() {
    return $this->numero;
  }
  public function getType() {
    return $this->type;
  }
  public function getSolde() {
    return $this->solde;
  }

  function __construct($data) {
    $this->hydrate($data);
    }

}
 ?>
