jQuery(document).ready(function () {

    jQuery(".menu-btn").click(function () {
        jQuery(".menu-overlay").fadeIn(300);
        jQuery(".menu").delay(320).css("right", "0");
    });

    jQuery(".menu-overlay").click(function () {
        jQuery(".menu").css("right", "-101%");
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


// jQuery(document).ready(function () {
//
//     var change_img_time = 4000,
//         transition_speed = 400;
//
//     var listItems = jQuery("#slider").children('li'),
//         dotItems = jQuery('#dots').children('li'),
//         listLen = listItems.length,
//         current,
//         changeTimeout;
//
//     function moveTo(newIndex) {
//
//         var i = newIndex;
//
//         if (newIndex === 'prev') {
//             i = (current > 0) ? (current - 1) : (listLen - 1);
//         }
//
//         if (newIndex === 'next') {
//             i = (current < listLen - 1) ? (current + 1) : 0;
//         }
//
//         dotItems.removeClass('active')
//             .eq(i).addClass('active');
//
//         listItems.fadeOut(transition_speed)
//             .eq(i).fadeIn(transition_speed);
//
//         current = i;
//
//         //resets time interval if user clicks on slider dot; then begin automated slider
//         clearTimeout(changeTimeout);
//         changeTimeout = setTimeout(function () {
//             moveTo('next');
//         }, change_img_time);
//     }
// });
//
//     // Event handlers
// jQuery("#dots li").click(function () {
//         var i = jQuery('#dots li').index(this);
//         moveTo(i);
//     });
//
// jQuery("#prev").click(function () {
//         moveTo('prev');
//     });
//
// jQuery("#next").click(function () {
//         moveTo('next');
//     });
//     //initialize slider on load
//     moveTo('next', 'prev');
//


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


// (function($) {
//
//     /*
//     *  new_map
//     *
//     *  Эта функция рендерит Google карту внутри выбранного jQuery элемента
//     *
//     *  @type	function
//     *  @date	8/11/2013
//     *  @since	4.3.0
//     *
//     *  @param	$el (jQuery элемент)
//     *  @return	n/a
//     */
//
//     function new_map( $el ) {
//
//         // Переменные
//         var $markers = $el.find('.marker');
//
//
//         // Переменные
//         var args = {
//             zoom		: 16,
//             center		: new google.maps.LatLng(0, 0),
//             mapTypeId	: google.maps.MapTypeId.ROADMAP
//         };
//
//
//         // Создаем карту
//         var map = new google.maps.Map( $el[0], args);
//
//
//         // Создаем заготовку массива маркеров
//         map.markers = [];
//
//
//         // Добавляем маркеры
//         $markers.each(function(){
//
//             add_marker( $(this), map );
//
//         });
//
//
//         // Центрируем карту
//         center_map( map );
//
//
//         // Возвращаем данные
//         return map;
//
//     }
//
//     /*
//     *  add_marker
//     *
//     *  Эта функция добавляет маркер на Google карту
//     *
//     *  @type	function
//     *  @date	8/11/2013
//     *  @since	4.3.0
//     *
//     *  @param	$marker (jQuery элемент)
//     *  @param	map (Google Map object)
//     *  @return	n/a
//     */
//
//     function add_marker( $marker, map ) {
//
//         // Переменные
//         var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
//
//         // Создаем маркер
//         var marker = new google.maps.Marker({
//             position	: latlng,
//             map			: map
//         });
//
//         // Добавляем маркер в массив
//         map.markers.push( marker );
//
//         // Если маркер содержит HTML, добавим его в infoWindow
//         if( $marker.html() )
//         {
//             // оздаем info window
//             var infowindow = new google.maps.InfoWindow({
//                 content		: $marker.html()
//             });
//
//             // Показываем info window при нажатии на маркер
//             google.maps.event.addListener(marker, 'click', function() {
//
//                 infowindow.open( map, marker );
//
//             });
//         }
//
//     }
//
//     /*
//     *  center_map
//     *
//     *  Эта функция центрирует карту и показывает все маркеры, прикрепленные к карте
//     *
//     *  @type	function
//     *  @date	8/11/2013
//     *  @since	4.3.0
//     *
//     *  @param	map (Google Map object)
//     *  @return	n/a
//     */
//
//     function center_map( map ) {
//
//         // Переменные
//         var bounds = new google.maps.LatLngBounds();
//
//         // Перебираем все маркеры и создаем bounds
//         $.each( map.markers, function( i, marker ){
//
//             var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
//
//             bounds.extend( latlng );
//
//         });
//
//         // Только 1 маркер?
//         if( map.markers.length == 1 )
//         {
//             // Центрируем карту
//             map.setCenter( bounds.getCenter() );
//             map.setZoom( 16 );
//         }
//         else
//         {
//             // fit to bounds
//             map.fitBounds( bounds );
//         }
//
//     }
//
//     /*
//     *  document ready
//     *
//     *  Эта функция рендерит каждую карту когда страница загружена
//     *
//     *  @type	function
//     *  @date	8/11/2013
//     *  @since	5.0.0
//     *
//     *  @param	n/a
//     *  @return	n/a
//     */
// // global var
//     var map = null;
//
//     $(document).ready(function(){
//
//         $('.acf-map').each(function(){
//
//             // Создаем карту
//             map = new_map( $(this) );
//
//         });
//
//     });
//
// })(jQuery);

let next = document.getElementById('next');
let prev = document.getElementById('prev');

let slides = document.querySelectorAll('.slide');

let i = 0;
next.addEventListener("click", function () {
    // Увеличиваем переменную i
    ++i
    // Условие если переменная i больше или равна количеству слайдов
    if (i >= slides.length) {
        // Удаляем класс block предыдущему слайду
        slides[i - 1].classList.remove("visible");
        // Присваиваем переменной i ноль
        i = 0;
        // Добавляем класс block следующему слайду
        slides[i].classList.add("visible");
    } else { // Иначе
        // Удаляем класс block предыдущему слайду
        slides[i - 1].classList.remove("visible");
        // Добавляем класс block следующему слайду
        slides[i].classList.add("visible");
    }
})
prev.addEventListener("click", function () {
    // Увеличиваем переменную i
    ++i;
    // Условие если переменная i больше или равна количеству слайдов
    if (i >= slides.length) {
        // Удаляем класс block предыдущему слайду
        slides[i - 1].classList.remove("visible");
        // Присваиваем переменной i ноль
        i = 0;
        // Добавляем класс block следующему слайду
        slides[i].classList.add("visible");
    } else { // Иначе
        // Удаляем класс block предыдущему слайду
        slides[i - 1].classList.remove("visible");
        // Добавляем класс block следующему слайду
        slides[i].classList.add("visible");
    }
})

$(document).ready(function() {

    //E-mail Ajax Send
    $("form").submit(function() { //Change
        var th = $(this);
        $.ajax({
            type: "POST",
            url: "mail.php", //Change
            data: th.serialize()
        }).done(function() {
            alert("Thank you!");
            setTimeout(function() {
                // Done Functions
                th.trigger("reset");
            }, 1000);
        });
        return false;
    });

});






