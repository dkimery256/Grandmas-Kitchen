<?php
/*
Check to see if current server is localhost to make 
development and hosting easier
*/
$local;
$error;
try{
    if(array_key_exists('HTTP_HOST', $_SERVER)){
        $server = $_SERVER['HTTP_HOST'];
        if(isset ($server)){
            if($server != "localhost"){
                return $local = false;
            }
    }
}
return $local = true;
} catch (Exception $e){
    $error = "Could not define request origin.";
    handle_error($error, $e);  
}


?>