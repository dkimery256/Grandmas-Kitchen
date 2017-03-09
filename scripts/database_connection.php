<?php
  require_once 'app_config.php'; 

class Db {
    
    private static $instance = NULL;

    private function __construct() {}
    private function __clone() {}

    //Start singleton design pattern for db connection
    public static function getInstance() {
        try{
          if (!isset(self::$instance)){
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            $db = 'mysql:host=' . DATABASE_HOST . ';dbname=' .DATABASE_NAME;
            self::$instance = new PDO($db, DATABASE_USERNAME, DATABASE_PASSWORD, $pdo_options);
        }
        return self::$instance;
        }catch(Exception $e){
          $user_error_message = urlencode("there was a problem connecting to the database that holds the information we need to get you connected.");
          $system_error_message = urlencode($e->getMessage());
          handle_error($user_error_message, $system_error_message);   
        }        
    }
}
?>
