$(document).ready(function() {

    //Create sticky nav bar
    $("#sticker").sticky({
        topSpacing: 0
    });

    //Set input sizes
    var allInputs = $(":input[type=text]");
    allInputs.each(function(i) {
        if ($(this).hasClass("item")) {
            $(this).attr('size', '35');
        } else if ($(this).hasClass("price")) {
            $(this).attr('size', '5');
        }
    });

    //Show navigation option in legend once with mouse hover with
    //an appended div with emmbeded anchor tags
    $("legend").hover(
        function() {
            $(this).append("<div id=\"show\" style=\"display: none;width: 50%;\">" +
                "Go to <a href=\"#top\"><u>Top</u></a> | Go to <a href=\"#bottom\"><u>Bottom</u></a>");
            $("#show").slideDown(200)
        },
        function() {
            $("#show").slideUp(200, function() {
                $(this).remove();
            })
        });

    //Scroll to clicked anchor even for added anchor elements
    $("body").on("click", "a", function(event) {
        //prevent the default action for the click event
        event.preventDefault();

        //get the full url - like mysitecom/index.htm#home
        var full_url = this.href;

        //split the url by # and get the anchor target name - home in mysitecom/index.htm#home
        var parts = full_url.split("#");
        var trgt = parts[1];

        //get the top offset of the target anchor
        var target_offset = $("#" + trgt).offset();
        var target_top = target_offset.top;

        //goto that anchor by setting the body scroll top to anchor top
        $('html, body').animate({
            scrollTop: target_top
        }, 'slow');
    });

    //Show or do not show the menu section for the picture
    $("#pic_check").on("click", function() {
        if ($(this).is(":checked")) {
            $("#pic_menu").slideDown(200);
            $("#photo_name").prop({
                disabled: false
            });
            $("#photo_name").prop({
                required: true
            });
        } else if ($(this).not(":checked")) {
            $("#pic_menu").slideUp(200);
            $("#photo_name").prop({
                disabled: true
            });
            $("#photo_name").prop({
                required: false
            });
        }
    });

    //Open new window to view files in app to delete
    $("#delete_pic").click(function() {
        var winFeature =
            'left=250,top=100,width=600,height=500,toolbar=no,menubar=no';
        window.open('gk_delete_menu.php', 'null', winFeature);
    });

});