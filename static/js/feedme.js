$(document).ready(function() {
    $('#friends-activity-carousel').jcarousel({
      wrap: 'circular'
    });

    $(document).click(function() {
        $('#share-box').hide();
    });

    $('.share-link').click(function(event) {
        $('#share-box').css({'position': 'absolute', 'top': event.pageY + 'px', 
            'left': event.pageX + 'px', 'z-index': 2, 'visibility': 'visible'});
        $('#share-box').show();
        event.stopPropagation();
    });

    $('#share-button').click(function() {
        $('#share-box').hide();
    });

    $
});