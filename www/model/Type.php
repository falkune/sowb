<?php
class Type{
    public static function getData($params){
        return json_encode([
            'status'    => "ok",
            'message'   => "tout bon",
            'data'      => $params
        ]);
    }
}