$(document).ready(function() {

    //Variables needed to set the width of the tables
    var max = 0,
        $cells = $('td');

    //Set width of the table data
    $cells.each(function() {
        var width = $(this).width();
        max = max < width ? width : max;
    });

    $table = $cells.closest('table');

    if ($table.width() < max * $cells.length) {
        max = 100 / $cells.length + '%';
    }

    $cells.each(function() {
        $(this).width(max);
    });

    //Button to set screen to fullscreen
    $("#fullscreen").click(function() {
        $("#fullscreen").hide();
        $('html').css('cursor', 'none');
        var doc = document.documentElement;
        doc.webkitRequestFullscreen();
        go_fullscreen = true;
    });

    //Event listener for when to call resize function
    $(window).resize(function() {
        if (go_fullscreen) {
            resizeToFullscreen();
            $("body").css('overflow', 'hidden');
            go_fullscreen = false;
        }
    });

    //When esc is pressed go back to menu before it was resized 
    //to maintain font and size integrety
    $(document).on('keyup', function(evt) {
        if (evt.keyCode == 27) {
            location.reload();
        }
    });

    //Resize font until fullscreen without overflow
    function resizeToFullscreen() {
        //Get screen height and width
        var screenWidth = $(window).width();
        var screenHieght = $(window).height();

        //Get column div elements by id 
        var column1 = $("#column1");
        var column2 = $("#column2");

        //Set elements to sreen width and height
        column1.width(screenWidth);
        column1.height(screenHieght);

        column2.width(screenWidth);
        column2.height(screenHieght);

        //Set needed variable for font adjustment loop to keep menu on screen without needing to scroll
        var h1Size = parseInt($("h1").css('font-size'));
        var tableSize = parseInt($("table").css('font-size'));
        var count = 99;
        var reH1Size = ((h1Size * count) / 100);
        var reTableSize = ((tableSize) * count / 100);
        var col1offSet = column1.outerHeight();
        var col2offSet = column2.outerHeight();

        var col1scroll = column1.prop("scrollHeight");
        var col2scroll = column2.prop("scrollHeight");

        //Set boolean for font adjustment loop
        var overflow = true

        //Loop to adjust largest column with overflow
        if (col1scroll > col2scroll) {
            while (overflow) {
                if (col1offSet < col1scroll) {
                    reH1Size = ((h1Size * count) / 100);
                    reTableSize = ((tableSize) * count / 100);
                    $("h1").css('font-size', reH1Size);
                    $("table").css('font-size', reTableSize);
                    count -= .5;
                    col1offSet = column1.outerHeight();
                    col1scroll = column1.prop("scrollHeight");
                } else {
                    overflow = false;
                }
            }
        } else {
            while (overflow) {
                if (col2offSet < col2scroll) {
                    reH1Size = ((h1Size * count) / 100);
                    reTableSize = ((tableSize) * count / 100);
                    $("h1").css('font-size', reH1Size);
                    $("table").css('font-size', reTableSize);
                    col2offSet = column2.outerHeight();
                    col2scroll = column2.prop("scrollHeight");
                    count -= .5;
                } else {
                    overflow = false;
                }
            }
        }
    }
});