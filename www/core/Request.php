<?php
/*
 * cette classe contient un attribut privé qui correspond a la requette de l'utilisateur 
 * et une methode public permettant de retourner sa valeur 
 */
class Request{

  private $_url;

  public function __construct(){
    $this->_url = $_SERVER['PATH_INFO'];
  }

  public function url(){
    return $this->_url;
  }

}