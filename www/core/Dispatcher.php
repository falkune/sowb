<?php
/**
 * point d'entré de lapplication
 * appel le router pour parser l'url
 * charger le bon controller
 */
class Dispatcher{
  private $_request;

  public function __construct(){
    $this->_request = new Request();
    Router::parse($this->_request->url(), $this->_request);
    $this->loadController();
  }

  public function loadController(){
    require(CONTROLLER.ucfirst($this->_request->controller).'Controller.php');

    if($this->_request->controller == "api")
      return new ApiController($this->_request->params);
    else
      return new WebController($this->_request->params);
  }
}
