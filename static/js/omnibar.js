$(document).ready(function () {
    var focus = false;

    $('#omnibar').focus(function() {
        $(this).addClass("large-omni");
        focus = true;
    });

    $('#omnibar').blur(function() {
        $(this).removeClass("large-omni");
        focus = false;
    })

    $('#omnibar').mouseover(function() {
        $(this).addClass("large-omni");
    });
    $('#omnibar').mouseout(function() {
        if (!focus) { $(this).removeClass("large-omni"); }
    });
});