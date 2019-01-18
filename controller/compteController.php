<?php
// require "model/compteManager.php";

class compteController {
    public function afficherComptes() {
        $message = "Bienvenue sur votre banque en ligne.";
        $compteManager = new compteManager();
        $comptes = $compteManager->getComptes();
        require "view/banqueView.php";
    }

    public function ajouterCompte() {
     $compteManager = new compteManager();
     if (!empty($_POST)) {
         $compte = new compte($_POST);
         $compteManager->addCompte($compte);
         redirectTo("");
     }
     require "view/addFormView.php";
 }

    public function deleteCompte()  {
      $compteManager = new compteManager();
      $id = $_GET["id"];
      $compteManager->deleteCompte($id);
      redirectTo("");
    }

    public function addVersement() {
      $compteManager = new compteManager();
      //On vérifie qu'un formulaire de depot a été soumis
      $comptes = $compteManager->getComptes();
      if(!empty($_POST))  {
        foreach($comptes as $key => $compte)
        {
          if($compte->getNumero() === $_POST["numero"])
          {
            $compte->addMoney($_POST["solde"]);
            $compteManager->addVersement($compte);
            redirectTo("");
          }
        }
        // $compteManager->addVersement($newSolde);
      }
      require "view/versementView.php";
    }
      //On récuère avec le manager le compte sélectionner par l'utilisayeur dans le formulaire
      //On appel la méthode addMoney de l'objet avec pour argument le montant du formulaire
      // On update l'objet en base de données avec le manager
      //On charge la vue avec le formulaire de dépot d'argent

}
 ?>
