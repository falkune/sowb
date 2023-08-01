<?php
class DbConnect{
    private static $_dbInstance = null;
    
    public static function getDbInstance($dbInfo){
        if(is_null(self::$_dbInstance)){
            try{
                return self::$_dbInstance = new PDO ("mysql:host={$dbInfo['host']};port={$dbInfo['port']};dbname={$dbInfo['db']};", $dbInfo['user'], $dbInfo['password']);
            }
            catch(PDOException $e){
                die($e->getMessage());
            }
        }
        return self::$_dbInstance;
    }
}