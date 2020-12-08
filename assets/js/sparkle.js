
jQuery(document).ready(function () {

        jQuery(".menu-btn").click(function () {
            jQuery(".menu-overlay").fadeIn(300);
            jQuery("#menu").delay(320).css("right", "0");
        });

        jQuery(".menu-overlay").click(function () {
            jQuery("#menu").css("right", "-101%");
            jQuery(".menu-overlay").fadeOut(300);
        });

        jQuery(document).scroll(function () {
            if (jQuery(this).scrollTop() > 500) {
                jQuery(".scroll-to-top").fadeIn(500);
            } else {
                jQuery(".scroll-to-top").fadeOut(500);
            }
        });

        jQuery(".scroll-to-top").click(function () {
            jQuery("html, body").animate({scrollTop: 0}, 400);
        });
    });



function block() {


    let wrap = jQuery("<div class='block'>")
    for (let i = 19; i < 100; i++) {
        let c = wrap.clone()
        jQuery("<span>").text(i).appendTo(c)
        c.appendTo(jQuery("#gallery"));
    }
}

block();

// let map;
//
// function initMap() {
//     map = new google.maps.Map(document.getElementById('map'), {
//         center: {lat: 56.934556, lng: 24.077226},
//         zoom: 12
//     });
// }



    jQuery(document).ready(function () {

        var change_img_time = 4000,
            transition_speed = 400;

        var listItems = jQuery("#slider").children('li'),
            dotItems = jQuery('#dots').children('li'),
            listLen = listItems.length,
            current,
            changeTimeout;

        function moveTo(newIndex) {

            var i = newIndex;

            if (newIndex === 'prev') {
                i = (current > 0) ? (current - 1) : (listLen - 1);
            }

            if (newIndex === 'next') {
                i = (current < listLen - 1) ? (current + 1) : 0;
            }

            dotItems.removeClass('active')
                .eq(i).addClass('active');

            listItems.fadeOut(transition_speed)
                .eq(i).fadeIn(transition_speed);

            current = i;

            //resets time interval if user clicks on slider dot; then begin automated slider
            clearTimeout(changeTimeout);
            changeTimeout = setTimeout(function () {
                moveTo('next');
            }, change_img_time);
        }
    });

        // Event handlers
    jQuery("#dots li").click(function () {
            var i = jQuery('#dots li').index(this);
            moveTo(i);
        });

    jQuery("#prev").click(function () {
            moveTo('prev');
        });

    jQuery("#next").click(function () {
            moveTo('next');
        });
        //initialize slider on load
        moveTo('next', 'prev');



// $('.show_rekv').click(function (){
//     $('#menu_footer').css('display', 'none');
// })
// $('.show_rekv').click(function (){
//     $('#menu_footer').css('display', ' ');
// })

jQuery('#show_rekv').on('click', function (e) {
    e.preventDefault();
    jQuery('.rekv_hidden').toggleClass('active_show');
});

jQuery('#show_all').click(function (e) {
    jQuery('.block').css('display', 'block');
    jQuery('#show_all').css('display', 'none');
});