<?php
//import required files
require_once 'scripts/gk_menu_util.php';

//Get menu data from url
$menu = json_decode($_GET['menu'], true);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Menu 1</title>
    <link rel="stylesheet" href="styles/gk_menu_styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="scripts/gk_menu_main.js"></script>
    <meta charset="UTF-8">
</head>

<body>
    <button type="button" id="fullscreen">Fullscreen</button>
    <div id="content">
        <div id="column1">
            <div id="breakfast">
                <h1>
                    <?php echo $menu['headers']['header_1']; ?>
                </h1>
                <table>
                    <caption class="blue">
                        <?php echo $menu['breakfast']['main_descript']; ?>
                    </caption>
                    <?php 
                //Breakfast Items
                $breakfast = $menu['breakfast'];
                gk_menu_util::echo_general_items($breakfast, 1, 4, "red");
                                               
                //Special Breakfast items
                gk_menu_util::echo_descript_items($breakfast, 7, 10, "red");
                ?>
                </table>
            </div>
            <div id="salads">
                <h1>
                    <?php echo $menu['headers']['header_2']; ?>
                </h1>
                <table>
                    <?php
                $salads = $menu['salads'];
                 //Choice of dressings
                $descript = $menu['salads']['salad_dressing']; 
                if($descript != "")
                {
                    echo "<caption class=\"blue\" >CHOICE OF DRESSING: {$descript}</caption>";
                }                
                //Salad Meats
                gk_menu_util::echo_general_items($salads, 0, 2, "blue");
                //Salads
                gk_menu_util::echo_descript_items($salads, 4, 8, "red", 'salads');               
                ?>
                </table>
            </div>
        </div>
        <div id="column2">
            <div id="cold_sands">
                <h1>
                    <?php echo $menu['headers']['header_3']; ?>
                </h1>
                <table>
                    <caption class="blue">
                        <?php echo $menu['cold_sands']['main_descript']; ?>
                    </caption>
                    <?php
                $cold_sands = $menu['cold_sands'];
                //Cold Sandwiches
                gk_menu_util::echo_general_items($cold_sands, 1, 4, "red");

                //Specialty Cold Sandwich item
                gk_menu_util::echo_descript_items($cold_sands, 7, 8, "red");
                ?>
                </table>
            </div>
            <div id="wraps">
                <h1>
                    <?php echo $menu['headers']['header_4']; ?>
                </h1>
                <table>
                    <caption class="blue">
                        <?php echo $menu['wraps']['main_descript']; ?>
                    </caption>
                    <?php
                $wraps = $menu['wraps'];
                //Wrap Items
                gk_menu_util::echo_general_items($wraps, 1, 4, "red");

                //Special Warps
                gk_menu_util::echo_descript_items($wraps, 7, 9, "red");
                ?>
                </table>
            </div>
            <div id="sides">
                <h1>
                    <?php echo $menu['headers']['header_5']; ?>
                </h1>
                <table>
                    <?php                
                $sides = $menu['sides'];                               
                gk_menu_util::echo_side_items($sides, "blue");
                ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>