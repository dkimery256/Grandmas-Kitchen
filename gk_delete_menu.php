<?php
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
    <title>Delete Photo</title>
    <link rel="stylesheet" href="styles/gk_menu_styles.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" 
    integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" 
    crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="scripts/gk_menu_main.js"></script>
    <meta charset="UTF-8">
</head>

<body>
    <h3>Choose A Photo to Delete</h3>
    <ul id="pic_list">
        <form method="POST" action="gk_delete_pic.php">
            <?php
        foreach($photo_names as $photo){
            echo "<li name=\"$photo\" class=\"pic_name\">$photo</li>";
        }       
    ?>
            <img id="current">

            <input type="hidden" name="delete_value" type="text" id="delete">
            <input type="submit" id="delete_button" value="Delete" style="display: none;" class="pure-button pure-button-primary">
        </form>
    </ul>
    <script>
        var dir = "/gk-menu/uploads/";
        var index = 0;
        //Get info from php and json encode it because it is an array
        var image_names = <?php echo json_encode($photo_names); ?>;
        var images = <?php echo json_encode($files); ?>;
        $("li").hover(function() {
            $(this).css("background-color:", "#6534ff");
        }, function() {
            $(this).css("background-color:", "#f2f2f2");
        });
        $(".pic_name").on("click", function() {
            $("li").css('background-color', "#f2f2f2");
            $(this).css('background-color', "#6534ff");
            $("#delete_button").show();
            index = $("li").index(this);
            $('#current').attr({
                src: "uploads/" + images[index],
                width: "350px",
                height: "250px"
            });
            $('#delete').attr("value", images[index]);
        });
    </script>
</body>

</html>