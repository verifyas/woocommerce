var processed = false;
jQuery( 'form.checkout' ).on( 'checkout_place_order_verify', function () {
    if (processed) {
        return true;
    }

    jQuery("body").append('<div id="chmodal"></div>');
    jQuery("#chmodal").append('<img id="img1" src="https://image.ibb.co/eLYL8G/checkout_modal.png"/>');
    jQuery("#chmodal").append('<img id="img2" src="https://image.ibb.co/g01whb/checkout_page_2.png"/>');
    jQuery("#chmodal").append('<img id="img3" src="https://image.ibb.co/hwcaaw/checkout_page_3.png"/>');

    jQuery('#img1').click(function() {
        jQuery('#img1').fadeOut(function() {
            jQuery('#img2').fadeIn();
        });
    });

    jQuery('#img2').click(function() {
        jQuery('#img2').fadeOut(function() {
            jQuery('#img3').fadeIn();
            processed = true;
        });
    });

    jQuery('#img3').click(function() {
        var form = jQuery( 'form.checkout, form#order_review' );
        form.submit();
    });

    return false;
});

jQuery( 'form#order_review' ).on( 'submit', function () {
    alert('verified');
});
