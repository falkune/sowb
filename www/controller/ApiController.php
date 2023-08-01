<?php

class ApiController extends Controller{

  private $_service = null;

  public function __construct($params){
    $this->loadService($params);
  }

  private function loadService($params){

    $this->_service = isset($params[1]) && ($params[1] == "marque" || $params[1] == "modele" || $params[1] == "type") ? $params[1] : 'Api404';

    echo $this->_service;
    require_once(MODEL.DIRECTORY_SEPARATOR.ucfirst($this->_service).'.php');

    switch($this->_service){
      case "marque":
        echo Marque::getData($params);
        break;
      case "modele":
        echo Modele::getData($params);
        break;
      case "type":
        echo Type::getData($params);
        break;
      default:
        echo Api404::getData($params);
    }
  }
}