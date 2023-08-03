<?php
class WebController extends Controller{

  private $_page;
  private $_path;

  public function __construct($params){
    $this->_path = $params[0];
    $this->loadPage();
  }

  private function loadPage(){
    if($this->_path == '' || $this->_path == 'home'){
      $this->_page = PAGES.DIRECTORY_SEPARATOR.WELCOME;
      require_once($this->_page);
      return $this->_page;
    }else{
      $this->_page = PAGES.DIRECTORY_SEPARATOR.$this->_path.'.php';
      if(is_file($this->_page)){
        require_once($this->_page);
        return $this->_page;
      }else{
        $this->_page = PAGES.DIRECTORY_SEPARATOR.'404.php';
        require_once($this->_page);
        return $this->_page;
      }
    }
  }
}