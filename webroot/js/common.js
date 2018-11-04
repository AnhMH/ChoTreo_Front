jQuery(document).ready(function () {
    $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
    });
    /*
     var defaults = {
     containerID: 'toTop', // fading element id
     containerHoverID: 'toTopHover', // fading element hover id
     scrollSpeed: 1200,
     easingType: 'linear' 
     };
     */
    $().UItoTop({easingType: 'easeOutQuart'});
    
    jQuery('#demo1').skdslider({'delay': 5000, 'animationSpeed': 2000, 'showNextPrev': true, 'showPlayButton': true, 'autoSlide': true, 'animationType': 'fading'});
    jQuery('#responsive').change(function () {
        $('#responsive_wrapper').width(jQuery(this).val());
    });
    $('#sortBy').on('change', function () {
        var val = $(this).val();
        var url = $('#sortByParam').val();
        location.href = url + '&sort=' + val;
    });
    $('#limitData').on('change', function () {
        var val = $(this).val();
        var url = $('#limiDataParam').val();
        location.href = url + '&limit=' + val;
    });
});