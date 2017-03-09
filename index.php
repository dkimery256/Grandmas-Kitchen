<?php
//import required files
require_once "scripts/database_connection.php";
require_once "scripts/gk_db_util.php";

//Get values stored in the database to keep the form input values up to date
$headers = gk_db_util::get_headers();
$breakfast = gk_db_util::get_breakfast();
$salads = gk_db_util::get_salads();
$cold_sands = gk_db_util::get_cold_sands();
$wraps = gk_db_util::get_wraps();
$sides = gk_db_util::get_sides();
$hot_sands = gk_db_util::get_hot_sands();
$veggies = gk_db_util::get_veggies();
$speicals = gk_db_util::get_specials();


//Build menu associative array
$menu = array(
    'headers'    => $headers,
    'breakfast'  => $breakfast,
    'salads'     => $salads,
    'cold_sands' => $cold_sands,
    'wraps'      => $wraps,
    'sides'      => $sides,
    'hot_sands'  => $hot_sands,
    'veggies'    => $veggies,    
    'specials'   => $speicals
   );
?>
<!DOCTYPE html>
<html>

<head>
    <title>GK Menu Form</title>
    <link rel="shortcut icon" type="image/png" href="https://gk-menu.herokuapp.com/icon_16x16.png">
    <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" 
    integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="styles/gk_form_styles.css">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="scripts/gk_form_main.js"></script>
    <script src="scripts/jquery-sticky/jquery.sticky.js"></script>    
    <meta charset="UTF-8">
</head>

<body>
    <h1 id="top">Grandma's Kitchen Menu Form</h1>
    <nav id="sticker" class="nav">
        <ul>
            <li><a href="#headers">Headers</a></li>
            <li><a href="#breakfast">Breakfast</a></li>
            <li><a href="#salads">Salads</a></li>
            <li><a href="#cold_sands">Cold Sandwiches</a></li>
            <li><a href="#wraps">Wraps</a></li>
            <li><a href="#sides">Sides</a></li>
            <li><a href="#hot_sands">Hot Sandwiches</a></li>
            <li><a href="#veggies">Vegetarian Specialties</a></li>
            <li><a href="#specials">House Specialties</a></li>
            <li><a href="#pic_check">Photos</a></li>
        </ul>
    </nav>
    <h2>Menu Headers</h2>
    <form method="POST" action="scripts/gk_process_menu_data.php" id="gk_form" class="pure-form pure-form-aligned" enctype="multipart/form-data">
        <fieldset>
            <legend id="headers">Headers</legend>

            <div class="pure-control-group">
                <label>Header 1: </label>
                <input name="headers[header_1]" class="item" value="<?php echo $menu['headers']['header_1'];?>" type="text" required>
            </div><br>

            <div class="pure-control-group">
                <label>Header 2: </label>
                <input name="headers[header_2]" class="item" value="<?php echo $menu['headers']['header_2'];?>" type="text" required>
            </div><br>

            <div class="pure-control-group">
                <label>Header 3: </label>
                <input name="headers[header_3]" class="item" value="<?php echo $menu['headers']['header_3'];?>" type="text" required>
            </div><br>

            <div class="pure-control-group">
                <label>Header 4: </label>
                <input name="headers[header_4]" class="item" value="<?php echo $menu['headers']['header_4'];?>" type="text" required>
            </div><br>

            <div class="pure-control-group">
                <label>Header 5: </label>
                <input name="headers[header_5]" class="item" value="<?php echo $menu['headers']['header_5'];?>" type="text" required>
            </div><br>

            <div class="pure-control-group">
                <label>Header 6: </label>
                <input name="headers[header_6]" class="item" value="<?php echo $menu['headers']['header_6'];?>" type="text" required>
            </div><br>

            <div class="pure-control-group">
                <label>Header 7: </label>
                <input name="headers[header_7]" class="item" value="<?php echo $menu['headers']['header_7'];?>" type="text" required>
            </div><br>

            <div class="pure-control-group">
                <label>Header 8: </label>
                <input name="headers[header_8]" class="item" value="<?php echo $menu['headers']['header_8'];?>" type="text" required>
            </div>
        </fieldset><br>
        <h2>Menu 1</h2>
        <fieldset>
            <legend id="breakfast">Breakfast</legend>

            <div class="pure-control-group">
                <label>Breakfast Main Description: </label>
                <textarea name="breakfast[main_descript]" form="gk_form" rows="4" cols="50"><?php echo $menu['breakfast']['main_descript'];?></textarea>
            </div><br>

            <div class="pure-control-group">
                <label>Breakfast Item 1: </label>
                <input class="item" name="breakfast[item_1]" value="<?php echo $menu['breakfast']['item_1'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="breakfast[price_1]" value="<?php echo $menu['breakfast']['price_1'];?>" type="text">
            </div>

            <div class="pure-control-group">
                <label>Breakfast Item 2: </label>
                <input class="item" name="breakfast[item_2]" value="<?php echo $menu['breakfast']['item_2'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="breakfast[price_2]" value="<?php echo $menu['breakfast']['price_2'];?>" type="text">
            </div>

            <div class="pure-control-group">
                <label>Breakfast Item 3: </label>
                <input class="item" name="breakfast[item_3]" value="<?php echo $menu['breakfast']['item_3'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="breakfast[price_3]" value="<?php echo $menu['breakfast']['price_3'];?>" type="text">
            </div><br>

            <div class="pure-control-group">
                <label>Special Breakfast Item 1: </label>
                <input class="item" name="breakfast[special_item_1]" value="<?php echo $menu['breakfast']['special_item_1'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="breakfast[special_price_1]" value="<?php echo $menu['breakfast']['special_price_1'];?>" type="text">
            </div>

            <div class="pure-control-group">
                <label>Description: </label>
                <textarea name="breakfast[special_item_1_descript]" rows="4" cols="50"><?php echo $menu['breakfast']['special_item_1_descript'];?></textarea><span>(Optional)</span>
            </div><br>

            <div class="pure-control-group">
                <label>Special Breakfast Item 2: </label>
                <input class="item" name="breakfast[special_item_2]" value="<?php echo $menu['breakfast']['special_item_2'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="breakfast[special_price_2]" value="<?php echo $menu['breakfast']['special_price_2'];?>" type="text">
            </div>

            <div class="pure-control-group">
                <label>Description: </label>
                <textarea name="breakfast[special_item_2_descript]" rows="4" cols="50"><?php echo $menu['breakfast']['special_item_2_descript'];?></textarea><span>(Optional)</span>
            </div><br>

            <div class="pure-control-group">
                <label>Special Breakfast Item 3: </label>
                <input class="item" name="breakfast[special_item_3]" value="<?php echo $menu['breakfast']['special_item_3'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="breakfast[special_price_3]" value="<?php echo $menu['breakfast']['special_price_3'];?>" type="text">
            </div>
            <div class="pure-control-group">
                <label>Description: </label>
                <textarea name="breakfast[special_item_3_descript]" rows="4" cols="50"><?php echo $menu['breakfast']['special_item_3_descript'];?></textarea><span>(Optional)</span>
            </div>
        </fieldset><br>

        <fieldset>
            <legend id="salads">Salads</legend>

            <div class="pure-control-group">
                <label>Meat 1: </label>
                <input class="item" name="salads[meat_1]" value="<?php echo $menu['salads']['meat_1'] ?>" type="text">

                <label>Price: </label>
                <input class="price" name="salads[meat_price_1]" value="<?php echo $menu['salads']['meat_price_1'] ?>" type="text">
            </div>

            <div class="pure-control-group">
                <label>Meat 2: </label>
                <input class="item" name="salads[meat_2]" value="<?php echo $menu['salads']['meat_2'] ?>" type="text">

                <label>Price: </label>
                <input class="price" name="salads[meat_price_2]" value="<?php echo $menu['salads']['meat_price_2'] ?>" type="text">
            </div><br>

            <div class="pure-control-group">
                <label>Salad Item 1: </label>
                <input class="item" name="salads[salad_item_1]" value="<?php echo $menu['salads']['salad_item_1'] ?>" type="text">

                <label>Price for Small: </label>
                <input class="price" name="salads[price_1_small]" value="<?php echo $menu['salads']['price_1_small'] ?>" type="text">

                <label>Price for Large: </label>
                <input class="price" name="salads[price_1_large]" value="<?php echo $menu['salads']['price_1_large'] ?>" type="text">
            </div>

            <div class="pure-control-group">
                <label>Description: </label>
                <textarea name="salads[salad_1_descript]" form="gk_form" rows="4" cols="50"><?php echo $menu['salads']['salad_1_descript'];?></textarea><span>(Optional)</span>
            </div><br>

            <div class="pure-control-group">
                <label>Salad Item 2: </label>
                <input class="item" name="salads[salad_item_2]" value="<?php echo $menu['salads']['salad_item_2'] ?>" type="text">

                <label>Price for Small: </label>
                <input class="price" name="salads[price_2_small]" value="<?php echo $menu['salads']['price_2_small'] ?>" type="text">

                <label>Price for Large: </label>
                <input class="price" name="salads[price_2_large]" value="<?php echo $menu['salads']['price_2_large'] ?>" type="text">
            </div>

            <div class="pure-control-group">
                <label>Description: </label>
                <textarea name="salads[salad_2_descript]" form="gk_form" rows="4" cols="50"><?php echo $menu['salads']['salad_2_descript'];?></textarea><span>(Optional)</span>
            </div><br>

            <div class="pure-control-group">
                <label>Salad Item 3: </label>
                <input class="item" name="salads[salad_item_3]" value="<?php echo $menu['salads']['salad_item_3'] ?>" type="text">

                <label>Price for Small: </label>
                <input class="price" name="salads[price_3_small]" value="<?php echo $menu['salads']['price_3_small'] ?>" type="text">

                <label>Price for Large: </label>
                <input class="price" name="salads[price_3_large]" value="<?php echo $menu['salads']['price_3_large'] ?>" type="text">
            </div>

            <div class="pure-control-group">
                <label>Description: </label>
                <textarea name="salads[salad_3_descript]" form="gk_form" rows="4" cols="50"><?php echo $menu['salads']['salad_3_descript'];?></textarea><span>(Optional)</span>
            </div><br>

            <div class="pure-control-group">
                <label>Salad Item 4: </label>
                <input class="item" name="salads[salad_item_4]" value="<?php echo $menu['salads']['salad_item_4'] ?>" type="text">

                <label>Price for Small: </label>
                <input class="price" name="salads[price_4_small]" value="<?php echo $menu['salads']['price_4_small'] ?>" type="text">

                <label>Price for Large: </label>
                <input class="price" name="salads[price_4_large]" value="<?php echo $menu['salads']['price_4_large'] ?>" type="text"><br>
            </div>

            <div class="pure-control-group">
                <label>Description: </label>
                <textarea name="salads[salad_4_descript]" form="gk_form" rows="4" cols="50"><?php echo $menu['salads']['salad_4_descript'];?></textarea><span>(Optional)</span>
            </div><br>

            <div class="pure-control-group">
                <label>Dressing: </label>
                <textarea name="salads[salad_dressing]" form="gk_form" rows="4" cols="50"><?php echo $menu['salads']['salad_dressing'];?></textarea>
            </div>
        </fieldset><br>

        <fieldset>
            <legend id="cold_sands">Cold Sandwiches</legend>

            <div class="pure-control-group">
                <label>Cold Sandwiches Main Description: </label>
                <textarea name="cold_sands[main_descript]" form="gk_form" rows="4" cols="50"><?php echo $menu['cold_sands']['main_descript'];?></textarea>
            </div><br>

            <div class="pure-control-group">
                <label>Cold Sandwich Item 1: </label>
                <input class="item" name="cold_sands[item_1]" value="<?php echo $menu['cold_sands']['item_1'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="cold_sands[price_1]" value="<?php echo $menu['cold_sands']['price_1'];?>" type="text">
            </div>

            <div class="pure-control-group">
                <label>Cold Sandwich Item 2: </label>
                <input class="item" name="cold_sands[item_2]" value="<?php echo $menu['cold_sands']['item_2'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="cold_sands[price_2]" value="<?php echo $menu['cold_sands']['price_2'];?>" type="text">
            </div>

            <div class="pure-control-group">
                <label>Cold Sandwich Item 3: </label>
                <input class="item" name="cold_sands[item_3]" value="<?php echo $menu['cold_sands']['item_3'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="cold_sands[price_3]" value="<?php echo $menu['cold_sands']['price_3'];?>" type="text">
            </div><br>

            <div class="pure-control-group">
                <label>Special Cold Sandwich Item: </label>
                <input class="item" name="cold_sands[special_item]" value="<?php echo $menu['cold_sands']['special_item'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="cold_sands[special_price]" value="<?php echo $menu['cold_sands']['special_price'];?>" type="text">
            </div>

            <div class="pure-control-group">
                <label>Description: </label>
                <textarea name="cold_sands[special_descript]" rows="4" cols="50"><?php echo $menu['cold_sands']['special_descript'];?></textarea><span>(Optional)</span>
            </div>
        </fieldset><br>

        <fieldset>
            <legend id="wraps">Wraps</legend>

            <div class="pure-control-group">
                <label>Main Description: </label>
                <textarea name="wraps[main_descript]" form="gk_form" rows="4" cols="50"><?php echo $menu['wraps']['main_descript'];?></textarea><br>
            </div><br>

            <div class="pure-control-group">
                <label>Wrap Item 1: </label>
                <input class="item" name="wraps[item_1]" value="<?php echo $menu['wraps']['item_1'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="wraps[price_1]" value="<?php echo $menu['wraps']['price_1'];?>" type="text">
            </div>

            <div class="pure-control-group">
                <label>Wrap Item 2: </label>
                <input class="item" name="wraps[item_2]" value="<?php echo $menu['wraps']['item_2'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="wraps[price_2]" value="<?php echo $menu['wraps']['price_2'];?>" type="text">
            </div>

            <div class="pure-control-group">
                <label>Wrap Item 3: </label>
                <input class="item" name="wraps[item_3]" value="<?php echo $menu['wraps']['item_3'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="wraps[price_3]" value="<?php echo $menu['wraps']['price_3'];?>" type="text">
            </div><br>

            <div class="pure-control-group">
                <label>Wrap Special Item 1: </label>
                <input class="item" name="wraps[special_item_1]" value="<?php echo $menu['wraps']['special_item_1'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="wraps[special_price_1]" value="<?php echo $menu['wraps']['special_price_1'];?>" type="text">
            </div>

            <div class="pure-control-group">
                <label>Description: </label>
                <textarea name="wraps[special_descript_1]" rows="4" cols="50"><?php echo $menu['wraps']['special_descript_1'];?></textarea><span>(Optional)</span>
            </div><br>

            <div class="pure-control-group">
                <label>Wrap Special Item 2: </label>
                <input class="item" name="wraps[special_item_2]" value="<?php echo $menu['wraps']['special_item_2'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="wraps[special_price_2]" value="<?php echo $menu['wraps']['special_price_2'];?>" type="text">
            </div>

            <div class="pure-control-group">
                <label>Description: </label>
                <textarea name="wraps[special_descript_2]" rows="4" cols="50"><?php echo $menu['wraps']['special_descript_2'];?></textarea><span>(Optional)</span>
            </div>
        </fieldset><br>

        <fieldset>
            <legend id="sides">Sides</legend>

            <div class="pure-control-group">
                <label>Side Item 1: </label>
                <input class="item" name="sides[side_1]" value="<?php echo $menu['sides']['side_1'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="sides[price_1]" value="<?php echo $menu['sides']['price_1'];?>" type="text"><br>
            </div>

            <div class="pure-control-group">
                <label>Side Item 2: </label>
                <input class="item" name="sides[side_2]" value="<?php echo $menu['sides']['side_2'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="sides[price_2]" value="<?php echo $menu['sides']['price_2'];?>" type="text"><br>
            </div>

            <div class="pure-control-group">
                <label>Side Item 3: </label>
                <input class="item" name="sides[side_3]" value="<?php echo $menu['sides']['side_3'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="sides[price_3]" value="<?php echo $menu['sides']['price_3'];?>" type="text"><br>
            </div>

            <div class="pure-control-group">
                <label>Side Item 4: </label>
                <input class="item" name="sides[side_4]" value="<?php echo $menu['sides']['side_4'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="sides[price_4]" value="<?php echo $menu['sides']['price_4'];?>" type="text"><br>
            </div>

            <div class="pure-control-group">
                <label>Side Item 5: </label>
                <input class="item" name="sides[side_5]" value="<?php echo $menu['sides']['side_5'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="sides[price_5]" value="<?php echo $menu['sides']['price_5'];?>" type="text"><br>
            </div>

            <div class="pure-control-group">
                <label>Side Item 6: </label>
                <input class="item" name="sides[side_6]" value="<?php echo $menu['sides']['side_6'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="sides[price_6]" value="<?php echo $menu['sides']['price_6'];?>" type="text"><br>
            </div>

            <div class="pure-control-group">
                <label>Side Item 7: </label>
                <input class="item " name="sides[side_7]" value="<?php echo $menu['sides']['side_7'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="sides[price_7]" value="<?php echo $menu['sides']['price_7'];?>" type="text"><br>
            </div>

            <div class="pure-control-group">
                <label>Side Item 8: </label>
                <input class="item" name="sides[side_8]" value="<?php echo $menu['sides']['side_8'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="sides[price_8]" value="<?php echo $menu['sides']['price_8'];?>" type="text"><br>
            </div>

            <div class="pure-control-group">
                <label>Side Item 9: </label>
                <input class="item" name="sides[side_9]" value="<?php echo $menu['sides']['side_9'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="sides[price_9]" value="<?php echo $menu['sides']['price_9'];?>" type="text">
            </div>
        </fieldset><br>

        <h2>Menu 2</h2>
        <fieldset>
            <legend id="hot_sands">Hot Sandwiches</legend>

            <div class="pure-control-group">
                <label>Hot Sandwiches Main Description: </label>
                <textarea name="hot_sands[main_descript]" form="gk_form" rows="4" cols="50"><?php echo $menu['hot_sands']['main_descript'];?></textarea>
            </div><br>

            <div class="pure-control-group">
                <label>Hot Sandwich Item 1: </label>
                <input class="item" name="hot_sands[item_1]" value="<?php echo $menu['hot_sands']['item_1'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="hot_sands[price_1]" value="<?php echo $menu['hot_sands']['price_1'];?>" type="text">
            </div>

            <div class="pure-control-group">
                <label>Hot Sandwich Item 2: </label>
                <input class="item" name="hot_sands[item_2]" value="<?php echo $menu['hot_sands']['item_2'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="hot_sands[price_2]" value="<?php echo $menu['hot_sands']['price_2'];?>" type="text">
            </div>

            <div class="pure-control-group">
                <label>Hot Sandwich Item 3: </label>
                <input class="item" name="hot_sands[item_3]" value="<?php echo $menu['hot_sands']['item_3'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="hot_sands[price_3]" value="<?php echo $menu['hot_sands']['price_3'];?>" type="text">
            </div>

            <div class="pure-control-group">
                <label>Hot Sandwich Item 4: </label>
                <input class="item" name="hot_sands[item_4]" value="<?php echo $menu['hot_sands']['item_4'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="hot_sands[price_4]" value="<?php echo $menu['hot_sands']['price_4'];?>" type="text">
            </div>
        </fieldset><br>

        <fieldset>
            <legend id="veggies">Vegetarian Specialties</legend>

            <div class="pure-control-group">
                <label>Vegetarian Item 1: </label>
                <input class="item" name="veggies[item_1]" value="<?php echo $menu['veggies']['item_1'] ?>" type="text">

                <label>Price: </label>
                <input class="price" name="veggies[price_1]" value="<?php echo $menu['veggies']['price_1'] ?>" type="text">
            </div>

            <div class="pure-control-group">
                <label>Description: </label>
                <textarea name="veggies[item_descript_1]" form="gk_form" rows="4" cols="50"><?php echo $menu['veggies']['item_descript_1'];?></textarea><span>(Optional)</span>
            </div><br>

            <div class="pure-control-group">
                <label>Vegetarian Item 2: </label>
                <input class="item" name="veggies[item_2]" value="<?php echo $menu['veggies']['item_2'] ?>" type="text">

                <label>Price: </label>
                <input class="price" name="veggies[price_2]" value="<?php echo $menu['veggies']['price_2'] ?>" type="text">
            </div>

            <div class="pure-control-group">
                <label>Description: </label>
                <textarea name="veggies[item_descript_2]" form="gk_form" rows="4" cols="50"><?php echo $menu['veggies']['item_descript_2'];?></textarea><span>(Optional)</span>
            </div><br>

            <div class="pure-control-group">
                <label>Vegetarian Item 3: </label>
                <input class="item" name="veggies[item_3]" value="<?php echo $menu['veggies']['item_3'] ?>" type="text">

                <label>Price: </label>
                <input class="price" name="veggies[price_3]" value="<?php echo $menu['veggies']['price_3'] ?>" type="text">
            </div>

            <div class="pure-control-group">
                <label>Description: </label>
                <textarea name="veggies[item_descript_3]" form="gk_form" rows="4" cols="50"><?php echo $menu['veggies']['item_descript_3'];?></textarea><span>(Optional)</span>
            </div><br>

            <div class="pure-control-group">
                <label>Vegetarian Item 4: </label>
                <input class="item" name="veggies[item_4]" value="<?php echo $menu['veggies']['item_4'] ?>" type="text">

                <label>Price: </label>
                <input class="price" name="veggies[price_4]" value="<?php echo $menu['veggies']['price_4'] ?>" type="text">
            </div>

            <div class="pure-control-group">
                <label>Description: </label>
                <textarea name="veggies[item_descript_4]" form="gk_form" rows="4" cols="50"><?php echo $menu['veggies']['item_descript_4'];?></textarea><span>(Optional)</span>
            </div>
        </fieldset><br>

        <fieldset>
            <legend id="specials">House Specialties</legend>

            <div class="pure-control-group">
                <label>House Specials Main Description: </label>
                <textarea name="specials[main_descript]" form="gk_form" rows="4" cols="50"><?php echo $menu['specials']['main_descript'];?></textarea>
            </div><br>

            <div class="pure-control-group">
                <label>House Special Item 1: </label>
                <input class="item" name="specials[item_1]" value="<?php echo $menu['specials']['item_1'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="specials[price_1]" value="<?php echo $menu['specials']['price_1'];?>" type="text"><br>
            </div>

            <div class="pure-control-group">
                <label>Description: </label>
                <textarea name="specials[item_descript_1]" form="gk_form" rows="4" cols="50"><?php echo $menu['specials']['item_descript_1'];?></textarea><span>(Optional)</span>
            </div><br>

            <div class="pure-control-group">
                <label>House Special Item 2: </label>
                <input class="item" name="specials[item_2]" value="<?php echo $menu['specials']['item_2'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="specials[price_2]" value="<?php echo $menu['specials']['price_2'];?>" type="text">
            </div>

            <div class="pure-control-group">
                <label>Description: </label>
                <textarea name="specials[item_descript_2]" form="gk_form" rows="4" cols="50"><?php echo $menu['specials']['item_descript_2'];?></textarea><span>(Optional)</span>
            </div><br>

            <div class="pure-control-group">
                <label>House Special Item 3: </label>
                <input class="item" name="specials[item_3]" value="<?php echo $menu['specials']['item_3'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="specials[price_3]" value="<?php echo $menu['specials']['price_3'];?>" type="text"><br>
            </div>

            <div class="pure-control-group">
                <label>Description: </label>
                <textarea name="specials[item_descript_3]" form="gk_form" rows="4" cols="50"><?php echo $menu['specials']['item_descript_3'];?></textarea><span>(Optional)</span>
            </div><br>

            <div class="pure-control-group">
                <label>House Special Item 4: </label>
                <input class="item" name="specials[item_4]" value="<?php echo $menu['specials']['item_4'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="specials[price_4]" value="<?php echo $menu['specials']['price_4'];?>" type="text">
            </div>

            <div class="pure-control-group">
                <label>Description: </label>
                <textarea name="specials[item_descript_4]" form="gk_form" rows="4" cols="50"><?php echo $menu['specials']['item_descript_4'];?></textarea><span>(Optional)</span>
            </div><br>

            <div class="pure-control-group">
                <label>House Special Item 5: </label>
                <input class="item" name="specials[item_5]" value="<?php echo $menu['specials']['item_5'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="specials[price_5]" value="<?php echo $menu['specials']['price_5'];?>" type="text">
            </div>

            <div class="pure-control-group">
                <label>Description: </label>
                <textarea name="specials[item_descript_5]" form="gk_form" rows="4" cols="50"><?php echo $menu['specials']['item_descript_5'];?></textarea><span>(Optional)</span>
            </div><br>

            <div class="pure-control-group">
                <label>House Special Item 6: </label>
                <input class="item" name="specials[item_6]" value="<?php echo $menu['specials']['item_6'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="specials[price_6]" value="<?php echo $menu['specials']['price_6'];?>" type="text">
            </div>

            <div class="pure-control-group">
                <label>Description: </label>
                <textarea name="specials[item_descript_6]" form="gk_form" rows="4" cols="50"><?php echo $menu['specials']['item_descript_6'];?></textarea><span>(Optional)</span>
            </div><br>

            <div class="pure-control-group">
                <label>House Special Item 7: </label>
                <input class="item" name="specials[item_7]" value="<?php echo $menu['specials']['item_7'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="specials[price_7]" value="<?php echo $menu['specials']['price_7'];?>" type="text">
            </div>

            <div class="pure-control-group">
                <label>Description: </label>
                <textarea name="specials[item_descript_7]" form="gk_form" rows="4" cols="50"><?php echo $menu['specials']['item_descript_7'];?></textarea><span>(Optional)</span>
            </div><br>

            <div class="pure-control-group">
                <label>House Special Item 8: </label>
                <input class="item" name="specials[item_8]" value="<?php echo $menu['specials']['item_8'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="specials[price_8]" value="<?php echo $menu['specials']['price_8'];?>" type="text">
            </div>

            <div class="pure-control-group">
                <label>Description: </label>
                <textarea name="specials[item_descript_8]" form="gk_form" rows="4" cols="50"><?php echo $menu['specials']['item_descript_8'];?></textarea><span>(Optional)</span>
            </div><br>

            <div class="pure-control-group">
                <label>House Special Item 9: </label>
                <input class="item" name="specials[item_9]" value="<?php echo $menu['specials']['item_9'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="specials[price_9]" value="<?php echo $menu['specials']['price_9'];?>" type="text">
            </div>

            <div class="pure-control-group">
                <label>Description: </label>
                <textarea name="specials[item_descript_9]" form="gk_form" rows="4" cols="50"><?php echo $menu['specials']['item_descript_9'];?></textarea><span>(Optional)</span>
            </div><br>

            <div class="pure-control-group">
                <label>House Special Item 10: </label>
                <input class="item" name="specials[item_10]" value="<?php echo $menu['specials']['item_10'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="specials[price_10]" value="<?php echo $menu['specials']['price_10'];?>" type="text">
            </div>

            <div class="pure-control-group">
                <label>Description: </label>
                <textarea name="specials[item_descript_10]" form="gk_form" rows="4" cols="50"><?php echo $menu['specials']['item_descript_10'];?></textarea><span>(Optional)</span>
            </div><br>

            <div class="pure-control-group">
                <label>House Special Item 11: </label>
                <input class="item" name="specials[item_11]" value="<?php echo $menu['specials']['item_11'];?>" type="text">

                <label>Price: </label>
                <input class="price" name="specials[price_11]" value="<?php echo $menu['specials']['price_11'];?>" type="text">
            </div>

            <div class="pure-control-group">
                <label>Description: </label>
                <textarea name="specials[item_descript_11]" form="gk_form" rows="4" cols="50"><?php echo $menu['specials']['item_descript_11'];?></textarea><span>(Optional)</span>
            </div><br>

            <div class="pure-control-group">
                <label>Extras: </label>
                <textarea name="specials[extra_items]" form="gk_form" rows="4" cols="50"><?php echo $menu['specials']['extra_items'];?></textarea><span>(Optional)</span>
            </div>
        </fieldset><br>
        <fieldset>
            <input type="checkbox" name="pic_check" value="shown" id="pic_check"> Add or Delete Photo
            <div style="display: none;" id="pic_menu">
                <div class="pure-control-group">
                    <legend>Photos</legend>
                    <label>Upload a Photo: </label>
                    <input type="hidden" name="MAX_FILE_SIZE" value="8000000" />
                    <input type="file" name="add_pic" value="Choose Photo" accept="image/*" class="pure-button">
                    <label>Photo Name: </label>
                    <input class="item" id="photo_name" name="photo_name" placeholder="This will be the name on the menu" type="text">
                </div>
                <div class="pure-control-group">
                    <label>Delete a Photo: </label>
                    <input type="button" id="delete_pic" name="delete_pic" value="Delete" class="pure-button">
                </div>
            </div>
        </fieldset><br>
        <input id="bottom" type="submit" value="Submit" class="pure-button pure-button-primary">
    </form>
</body>

</html>