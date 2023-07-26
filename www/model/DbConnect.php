<?php
class DbConnect{
    /**
     * cette classe defini un attribut privé et static _dbInstance qui correspond a l'objet de connexion à la base de données
     * et une methode permetant creer une instance de connexion a la base de données si cette instance n'existe pas déjà
     * si cette instance existe elle la retourne
     */
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