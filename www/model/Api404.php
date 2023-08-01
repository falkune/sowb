<?php
class Api404{
    public static function getData($params){
        return json_encode([
            'status'    => "404",
            'message'   => "Not found",
            'data'      => $params
        ]);
    }
}