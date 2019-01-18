<?php

//Function qui retourne un tableau contenant les routes de notre application

//Modèle des routes
//"NomDeLaRoute" => [
//  "Controller",
//  "Fonction",
//  Optionnel [
//    "parametre1" => ["typeAttendu", optionnel[valeurAttendu]],
//    "parametre2" => ["typeAttendu", optionnel[valeurAttendu]]
//  ]
// "status" => "role"
//]
function getRoutes() {
  return [
    "" => [
      "banque",
      "welcome",
    ],
    "" => [
      "compte",
      "afficherComptes",
    ],
    "virement" => [
      "virement",
      "addVirement",
    ],
    "versement" => [
      "versement",
      "addVersement",
    ],
    "retrait" => [
      "retrait",
      "addRetrait",
    ],
    "ajouterCompte" => [
      "compte",
      "ajouterCompte",
    ],
    "deleteCompte" => [
      "compte",
      "deleteCompte",
      ["id" => ["integer"]]
    ]

  ];
}

 ?>
