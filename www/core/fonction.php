<?php
session_start();
// inclusion des different fichiers 
require_once('connexion.php');

// fonction poyur recuperer les modele d'une marque
function getModele($idMarque){
  $connexion = connexion();
  $request = $connexion->prepare("SELECT * FROM modeles WHERE id_marque = ?");
  $request->execute(array($idMarque));
  $modeles = $request->fetchAll();
  return $error = json_encode([
    'status'  => 200,
    'message' => "success..",
    'modeles' => $modeles
  ]);
}


function getTyppe($idType){
  $connexion = connexion();
  $request = $connexion->prepare("SELECT * FROM types WHERE modele = ?");
  $request->execute(array($idType));
  $types = $request->fetchAll();
  return $error = json_encode([
    'status'  => 200,
    'message' => "success..",
    'modeles' => $types
  ]);
}
