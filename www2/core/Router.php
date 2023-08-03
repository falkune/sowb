<?php
/**
 * parse l'url
 * determine le controlleur
 * retourn l'objet request
 */
class Router{

  static function parse($url, $request){
    $url = trim($url, '/');
    $request->params = explode('/', $url);
    $request->controller = ($request->params[0] != 'api' || $request->params[0] == 'web') ? "web" : $request->params[0];
    return $request;
  }

}
