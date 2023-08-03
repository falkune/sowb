<?php
require(MODEL . DIRECTORY_SEPARATOR . 'DbConnect.php');

class Marque{
    private static $connexion = null;

    public function __construct(){
        
    }

    public static function getData($params){
        $request = $this->_connexion->prepare("SELECT * FROM marques");
        $request->execute();
        $marques = $request->fetchAll();
        return json_encode([
            'status'    => 200,
            'message'   => "success",
            'data'      => $marques
        ]);
    }
}