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
      "compte",
      "afficherComptes",
    ],
    "virement" => [
      "compte",
      "addVirement",
    ],
    "versement" => [
      "compte",
      "addVersement",
    ],
    "retrait" => [
      "compte",
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
