<?php

//import required files
require_once 'scripts/gk_menu_util.php';

//Get menu data from session
session_start();
$menu = $_SESSION['menu_2'];

//Get files in upload folder.
$dir = "uploads";
$files  = scandir($dir);
if(is_array($files)){
    array_shift($files);
    array_shift($files);
    for($i = 0; $i < count($files); $i++){
        if($files[$i] == "desktop.ini"){
            array_splice($files, $i, 1);
        }
    }
    
    //Get names of photos only without extension
    $photo_names = [];
    foreach ($files as $name){
        list($new_name) = explode('.', $name);
        array_push($photo_names, $new_name);
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Menu 2</title>
    <link rel="shortcut icon" type="image/png" href="https://gk-menu.herokuapp.com/icon_16x16.png">
    <link rel="stylesheet" href="styles/gk_menu_styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="scripts/gk_menu_main.js"></script>
    <meta charset="UTF-8">
</head>

<body>
    <button type="button" id="fullscreen">Fullscreen</button>
    <div id="content">
        <div id="column1">
            <div id="col1Height">
                <div id="hot_sands">
                    <h1>
                        <?php echo $menu['headers']['header_6']; ?>
                    </h1>
                    <table>
                        <caption class="blue">
                            <?php echo $menu['hot_sands']['main_descript']; ?>
                        </caption>
                        <?php
                    $hot_sands = $menu['hot_sands'];
                    //Hot Sandwiches
                    gk_menu_util::echo_general_items($hot_sands, 1, 5, "red");                
                    ?>
                    </table>
                </div>
                <div id="veggies">
                    <h1>
                        <?php echo $menu['headers']['header_7']; ?>
                    </h1>
                    <table>
                        <?php
                    $veggies = $menu['veggies'];
                    gk_menu_util::echo_descript_items($veggies, 0, 4, "red");
                    ?>
                    </table>
                </div>
            </div>
            <div id="slideshow">
                <!--Slide show goes here via javascript-->
            </div>
        </div>
        <div id="column2">
            <div id="specials">
                <h1>
                    <?php echo $menu['headers']['header_8']; ?>
                </h1>
                <table>
                    <caption class="blue">
                        <?php echo $menu['specials']['main_descript']; ?>
                    </caption>
                    <?php
                //House Speicals
                $specials = $menu['specials'];
                gk_menu_util::echo_descript_items($specials, 1, 12, "red");
                $descript = $menu['specials']['extra_items']; 
                if($descript != "")
                {
                    echo "<tr><td class=\"blue\" colspan=\"2\">{$descript}</td></tr>";
                }
                ?>
                </table>
            </div>
        </div>
    </div>
</body>
<!--Script to dynamically position and start slideshow-->
<script>
    $(document).ready(function() {

        //Start slide show once window is resized
        $(window).resize(function() {
            //Check to ensure window was put in fullscreen mode before starting slide show
            //In case the window resize was just to move the tab or window
            if (document.webkitIsFullScreen) {
                var dir = "/uploads/";
                //Get info from php and json encode it because it is an array
                var image_names = <?php echo json_encode($photo_names); ?>;
                var images = <?php echo json_encode($files); ?>;
                //Get current height and width of div element
                var image_width = ($('table').width() / 1.5);
                var screenHieght = $(window).height();
                var col1Height = $('#col1Height').innerHeight();
                var offsetHeight = (screenHieght - col1Height) - 50;
                //If image files and image names are not equal then do not post pictures. 
                if (image_names.length === images.length) {
                    for (var i = 0; i < images.length; i++) {
                        $('#slideshow').append('<div><img src="' + dir + images[i] +
                            '" alt="menu picture" width="' + image_width +
                            '" height="' + offsetHeight +
                            '" style="box-shadow: 0 0 20px rgba(0,0,0,0.4);padding: 10px;">' +
                            '<h2>' + image_names[i] + '</h2></div>');
                    }
                    $("#slideshow > div:gt(0)").hide();
                    setInterval(function() {
                        $('#slideshow > div:first')
                            .fadeOut(1500)
                            .next()
                            .fadeIn(1500)
                            .end()
                            .appendTo('#slideshow');
                    }, 10000);
                }
                //else do nothing, do not show pictures due to file error
            }
        });
    });
</script>

</html>