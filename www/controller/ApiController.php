<?php

class ApiController extends Controller{

  private $_service = null;

  public function __construct($params){
    $this->loadService($params);
  }

  private function loadService($params){

    $this->_service = isset($params[1]) && ($params[1] == "marque" || $params[1] == "modele" || $params[1] == "type") ? $params[1] : 'Api404';

    require_once(MODEL.DIRECTORY_SEPARATOR.ucfirst($this->_service).'.php');

    switch($this->_service){
      case "user":
        User::userActions($action = isset($params[2]) ? $params[2] : 'list');
        break;
      case "client":
        Client::clientActions($action = isset($params[2]) ? $params[2] : 'list');
        break;
      case "mission":
        Mission::missionActions($action = isset($params[2]) ? $params[2] : 'list');
        break;
      default:
        Api404::notFound404();
    }
  }
}