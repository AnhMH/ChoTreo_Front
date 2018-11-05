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

    init_cart();
});

/*
 * Init cart functions
 */
function init_cart() {
    $('.value-plus').on('click', function () {
        var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10) + 1;
        divUpd.text(newVal);
    });

    $('.value-minus').on('click', function () {
        var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10) - 1;
        if (newVal >= 1)
            divUpd.text(newVal);
    });

    $('.close3').on('click', function (c) {
        $('.rem3').fadeOut('slow', function (c) {
            $('.rem3').remove();
        });
    });
}

function addToCart($pId, $qty) {
    if (typeof $pId == 'undefined') {
        $pId = false;
    }
    if (typeof $qty == 'undefined') {
        $qty = 1;
    }
    if ($pId) {
        var $param = {
            'type': 'POST',
            'url': BASE_URL + '/ajax/addtocart',
            'data': {
                'product_id': $pId,
                'qty': $qty
            },
            'callback': function (data) {
                if (data > 0) {
                    $('#topCartNumber').show().html(data);
                }
            }
        };
        cms_adapter_ajax($param);
    }
    return false;
}

/*
 * Process ajax request
 *
 * $param là một object {'type','url', 'data', 'callback'}
 *
 * default type POST
 /*********************************************************************/
function cms_adapter_ajax($param) {
    $.ajax({
        headers: {
            'X-CSRF-Token': _csrfToken
        },
        url: $param.url,
        type: $param.type,
        data: $param.data,
        async: true,
        success: $param.callback
    });
}