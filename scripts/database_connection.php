<?php
  require_once 'app_config.php';
  //turn on exception handling for try catch
  mysqli_report(MYSQLI_REPORT_ALL) ;
  try {
     $mysqli = new mysqli(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME);        
  } catch (Exception $e) {
      $user_error_message = urlencode("there was a problem connecting to the database that holds the information we need to get you connected.");
      $system_error_message = urlencode($e->getMessage());
      handle_error($user_error_message, $system_error_message);      
  } 
?>
