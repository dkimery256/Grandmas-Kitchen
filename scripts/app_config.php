<?php
//Check server status
require_once 'check_db_env.php';

if($local){
    //Local server database connection constants
    define("DATABASE_HOST", "localhost");
    define("DATABASE_USERNAME", "root");
    define("DATABASE_PASSWORD", "");
    define("DATABASE_NAME", "gk_database");

    //Define dubug mode on or off and following debug tools
    define("DEBUG_MODE", true);
} else {
    //Hosting server database connection constants
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);
    define("DATABASE_HOST", $server);
    define("DATABASE_USERNAME", $username);
    define("DATABASE_PASSWORD", $password);
    define("DATABASE_NAME", $db);

    //Define dubug mode on or off and following debug tools
    define("DEBUG_MODE", false);
}


//Define site root
define("SITE_ROOT", "/gk-menu/");

if (DEBUG_MODE){
    error_reporting(E_ALL);
}else{
    error_reporting(0);
}


function debug_print($message){
    if(DEBUG_MODE){
        echo $message;
    }
}

function handle_error($user_error_message, $system_error_message){
    header("Location: " . SITE_ROOT . "scripts/error_page.php?error_message={$user_error_message}&system_error_message={$system_error_message}");
    exit();
}
?>
