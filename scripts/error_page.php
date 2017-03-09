<html>
 <head>
  <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" 
    integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" 
    crossorigin="anonymous">
 </head>

 <body>
  <div id="header"><h1>Grandma's Kitchen Menu</h1></div>
  <div id="example">Uh oh... sorry!</div>

  <div id="content">
    <h1>We're really sorry...</h1>
    <!--<p><img src ="../images/error.jpg" class="error"/>-->
    <?php
     require_once 'app_config.php';

     if(isset($_REQUEST['error_message'])){
        $error_message = preg_replace("/\\\\/" , '', $_REQUEST['error_message']);
     }else{
       $error_message = "...something went wrong, and that's how you ended up here.";
     }
     echo $error_message;
     if (isset($_REQUEST['system_error_message'])){
       $system_error_message = preg_replace("/\\\\/" , '', $_REQUEST['system_error_message']);
     }else{
       $system_error_message = "No system-level error message was reported";
     }     
     ?>
    <span></p>
    <p>Don't worry, we've been notified that there's a
      problem, and we take these things seriously. In fact, if you want to 
      contact us to find out more about what's happened, or you have any 
      concerns, just <a href="mailto:dkimery256@outlook.com">email us</a>
      and we'll be happy to get right back to you.</p>
    <p>In the meantime, if you want to go back to the menu form that caused 
      the problem, you can do that <a href="../index.php">by 
      clicking here</a> If the same problem occurs, though, you may
      want to come back a bit later. We bet we'll have things figured
      out by then. Thanks again... we'll see you soon. And again, we're 
      really sorry for the inconvenience.</p>
  </div>
  <?php
  debug_print("<hr>");
  debug_print("<p>The following system-level message was received:
    <strong>{$system_error_message}</strong></p>");
  ?>
  <div id="footer"></div>
 </body>
</html>
