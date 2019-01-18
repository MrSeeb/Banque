<?php
require "model/compteManager.php";

class compteController {
    public function afficherComptes() {
        $compteManager = new compteManager();
        $comptes = $compteManager->getComptes();
        require "view/banqueView.php";
    }

    public function ajouterCompte() {
     $compteManager = new compteManager();
     if (!empty($_POST)) {
         $compte = new compte($_POST);
         $compteManager->addCompte($compte);
     }
     require "view/addFormView.php";
 }

    public function deleteCompte()  {
    $compteManager = new compteManager();
    $id = htmlspecialchars($_GET["id"]);
    $compteManager->deleteCompte($id);
    }
}
 ?>
