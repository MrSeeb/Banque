<?php

require "entity/compte.php";

class compteManager extends manager {
    public function getComptes() {
        $db = $this->getDb();
        $req = $db->query("SELECT * FROM comptes");
        $result = $req->fetchall(PDO::FETCH_ASSOC);
        return $result;
    }

    public function addCompte(compte $compte) {
      $db = $this->getDb();
         $req = $db->prepare("INSERT INTO comptes (numero, type, solde) VALUES (:numero, :type, :solde)");
         $result = $req->execute([
             "numero" => $compte->getNumero(),
             "type" => $compte->getType(),
             "solde" => $compte->getSolde(),
         ]);
         return $result;
    }
    public function deleteCompte($id) {
    $db = $this->getDb();
    $req = $db->prepare("DELETE FROM comptes WHERE id = $id");
    $result = $req->execute([
        "id" => $id,
    ]);
    return $result;
}
}
?>
