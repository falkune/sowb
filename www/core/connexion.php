<?php
define("SERVER_NAME", "db.sowb.com");
define("DB_NAME", "swob_db");
define("DB_USER", "admin");
define("DB_PASSWORD", "admin");

function connexion(){

  try{
    $error = new PDO('mysql:host='.SERVER_NAME.';dbname='.DB_NAME, DB_USER, DB_PASSWORD, array(PDO::ATTR_ERRMODE	=>PDO::ERRMODE_EXCEPTION));
  }
  catch(PDOException $e){
    $error = "probleme de connexion";
  }

  return $error;

}