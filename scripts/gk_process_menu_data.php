<?php 

//import required files
require_once "app_config.php";
require_once "database_connection.php";//instantiate the mysqli object
require_once "gk_db_util.php";

//function to replace ampersand
function replace_ampersand($array){    
    foreach($array as $key => $value){
        $original = $value;
        $pattern = '/&/';
        $replacement = 'and';
        $value = preg_replace($pattern, $replacement, $original);
        $array[$key] = $value;  
    }
    return $array;
}

//Get form data from post, trim white space, and replace & with and to avoid method get errors 
$breakfast = replace_ampersand(array_map('trim',$_POST['breakfast']));
$salads = replace_ampersand(array_map('trim',$_POST['salads']));
$cold_sands = replace_ampersand(array_map('trim',$_POST['cold_sands']));
$wraps = replace_ampersand(array_map('trim',$_POST['wraps']));
$sides = replace_ampersand(array_map('trim',$_POST['sides']));
$hot_sands = replace_ampersand(array_map('trim',$_POST['hot_sands']));
$veggies = replace_ampersand(array_map('trim',$_POST['veggies']));
$specials = replace_ampersand(array_map('trim',$_POST['specials']));
$headers = replace_ampersand(array_map('trim', $_POST['headers']));
$menu = ['headers' => $headers];
$menu_1_headers = array(
    'header_1' => $headers['header_1'],
    'header_2' => $headers['header_2'],
    'header_3' => $headers['header_3'],
    'header_4' => $headers['header_4'],
    'header_5' => $headers['header_5'],
    );
$menu_2_headers = array(
    'header_6' => $headers['header_6'],
    'header_7' => $headers['header_7'],
    'header_8' => $headers['header_8'],
);


//Check and see if the image uploading portion of the form was accessed
$image_check = isset($_POST['pic_check']); 
$field_check = (isset($_POST['photo_name']));

//If image portion was accessed verify photo and photo name was uploaded
//Also ensure that only image data was uploaded.
if($image_check && $field_check){
    
    $image_fieldname = 'add_pic';
    $upload_dir = '../uploads/';
    
    //Handle errors caused by wrong download type
    $php_errors = array(1 => 'Maximum file size in php.ini exceeded',
                           2 => 'Maximum file size in  HTML form exceeded',
                           3 => 'Only part of the file was uploaded',
                           4 => 'No file was selected to upload');
    
        //Check for error during uploading
        ($_FILES[$image_fieldname]['error'] == 0)
        or handle_error("The server couldn't upload the image you selected", 
                        $php_errors[$_FILES[$image_fieldname]['error']]);
        
        //Check to see if the file is an valid upload
        @is_uploaded_file($_FILES[$image_fieldname]['tmp_name'])
        or handle_error("You did not select a valid uploadable file",
                        "Upload Request: {$_FILES[$image_fieldname]['tmp_name']}");

        //Check to see if file is acctually an image
        @getimagesize($_FILES[$image_fieldname]['tmp_name'])
        or handle_error("You selected a file that is not a an image file", 
        "{$_FILES[$image_fieldname]['tmp_name']} is not a valid image file");

        //Name the file with user input
        $filename = $_FILES[$image_fieldname]["name"];
        $dot  = strrpos($filename, '.');
        $extension = substr( $filename, $dot + 1);
        $newfilename=  $_POST['photo_name'] . "." . $extension;
        $_FILES[$image_fieldname]['name'] = $newfilename;

        //Insert image data into the database
        $image = $_FILES[$image_fieldname];
        $uploadfile = $upload_dir .  basename($image['name']);
        //Move file to file directory
        
        @move_uploaded_file($image['tmp_name'], $uploadfile)
        or handle_error("We had a problem saving your image to its permanent location.",
        "Permissions or related error moving file to {$uploadfile}");
        
}

//Build menus associative array with posted array data
$menu_1 = array(
    'headers'    => $menu_1_headers,
    'breakfast'  => $breakfast,
    'salads'     => $salads,
    'cold_sands' => $cold_sands,
    'wraps'      => $wraps,
    'sides'      => $sides       
    );

$menu_2 = array(
    'headers'   => $menu_2_headers,
    'hot_sands' => $hot_sands,
    'veggies'   => $veggies,      
    'specials'  => $specials
);

//update database with data submitted
gk_db_util::update_headers($menu, $mysqli);
gk_db_util::update_breakfast($menu_1, $mysqli);
gk_db_util::update_salads($menu_1, $mysqli);
gk_db_util::update_cold_sands($menu_1, $mysqli);
gk_db_util::update_wraps($menu_1, $mysqli);
gk_db_util::update_sides($menu_1, $mysqli);
gk_db_util::update_hot_sands($menu_2, $mysqli);
gk_db_util::update_veggies($menu_2, $mysqli);
gk_db_util::update_specials($menu_2, $mysqli);

$mysqli->close();
?>
<!--Javascript to control the flow of data to the menus and html content of loading page-->
<script type="text/javascript" language="Javascript">

//Event to fire once window it loaded
window.onload = function () {
    //encode php array into json data
    var menu1 = <?php echo json_encode($menu_1); ?>;                
    var menu2 = <?php echo json_encode($menu_2); ?>;    

    //convert the json data into string and uri encode it for the url
    menu1 = JSON.stringify(menu1);
    menu1 = encodeURI(menu1);

    menu2 = JSON.stringify(menu2);
    menu2 = encodeURI(menu2);

    //Open new tabs and send converted php data
    window.open('../gk_menu_1.php?menu=' + menu1);
    window.open('../gk_menu_2.php?menu=' + menu2);
    window.open('../gk_menu_form.php', "_self");                            
}            
</script>    