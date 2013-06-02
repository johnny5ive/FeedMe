$(document).ready(function() {
    $('#friends-activity-carousel').jcarousel({
      wrap: 'circular'
    });

    $('.share-link').click(function () {
        $('#article_46').load('layout/share.php');
    });

     
});