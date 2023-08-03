<?php
require_once('fonction.php');

// parse de l'url transformer en tableau pour determiner l'action que l'utilisateur souhaite realiser
$url = explode('/', $_GET['url']);
$service = $url[0];

// en fonction de l'url on execute une action
switch ($service) {
  case "getModele":
    echo getModele($url[1]);
    break;
  case "getType":
    echo getTyppe($url[1]);
    break;
  default:
    echo $error = json_encode([
      'status' => 'failed',
      'message' => '404 not foud!'
    ]);
}