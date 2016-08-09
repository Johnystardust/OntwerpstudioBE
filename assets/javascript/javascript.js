$ = jQuery;

$(document).ready(function(){

    var windowWidth = $(window).width();
    var windowHeight = $(window).height();

    // Make the slider the height off the window
    $('#intro-header').height(windowHeight);
    $('.header-content').height(windowHeight);


    /*
     |-------------------------------------------------------------------------------------------------------------------
     |   Set Mobile Device Classes.
     |-------------------------------------------------------------------------------------------------------------------
     */
    var deviceAgent = navigator.userAgent.toLowerCase();
    var html        = $('html');

    if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
        html.addClass('ios');
        html.addClass('mobile');
    }

    if (deviceAgent.match(/(Windows Phone)/i)) {
        html.addClass('windows');
        html.addClass('mobile');
    }

    if (deviceAgent.match(/(iemobile)/i)) {
        html.addClass('iemobile');
        html.addClass('mobile');
    }

    if (deviceAgent.match(/android/)) {
        html.addClass('android');
        html.addClass('mobile');
    }

    if (deviceAgent.match(/blackberry/)) {
        html.addClass('blackberry');
        html.addClass('mobile');
    }

    if (deviceAgent.match(/(symbianos|^sonyericsson|^nokia|^samsung|^lg)/)) {
        html.addClass('mobile');
    }

    /*
    |-----------------------------------------------------------------------------------------------------------------------
    |   Border Angle function
    |-----------------------------------------------------------------------------------------------------------------------
    */

    // Content angle height - windowHeight
    var topAngle = $('.top-angle');
    var topAngleHeight = parseInt(topAngle.css('border-bottom-width'));

    topAngle.css('border-left-width', (windowWidth / 100) * 65);

    // Content Angle
    var contentAngle = $('.content-angle');
    var contentAngleHeight = parseInt(contentAngle.css('border-top-width'));

    contentAngle.css('border-left-width', windowWidth);
    contentAngle.css('margin-top', (windowHeight - (topAngleHeight + contentAngleHeight)));

    // Bottom Angle
    var bottomAngle = $('.bottom-angle');
    bottomAngle.css('border-right-width', windowWidth);

    // Footer angle
    var footerAngle = $('.footer-angle');
    footerAngle.css('border-left-width', (windowWidth / 100) * 500);


    // Resize border
    $(window).resize(function(){
        var windowWidth = $(window).width();
        var windowHeight = $(window).height();

        $('#intro-header').height(windowHeight);
        $('.header-content').height(windowHeight);

        // Content angle height - windowHeight
        var topAngle = $('.top-angle');
        var topAngleHeight = parseInt(topAngle.css('border-bottom-width'));

        topAngle.css('border-left-width', (windowWidth / 100) * 65);

        // Content Angle
        var contentAngle = $('.content-angle');
        var contentAngleHeight = parseInt(contentAngle.css('border-top-width'));

        contentAngle.css('border-left-width', windowWidth);
        contentAngle.css('margin-top', (windowHeight - (topAngleHeight + contentAngleHeight)));

        // Bottom Angle
        var bottomAngle = $('.bottom-angle');
        bottomAngle.css('border-right-width', windowWidth);

        // Footer angle
        var footerAngle = $('.footer-angle');
        footerAngle.css('border-left-width', (windowWidth / 100) * 500);
    });

    /*
    |-----------------------------------------------------------------------------------------------------------------------
    |   Menu Collapse function
    |-----------------------------------------------------------------------------------------------------------------------
    */
    if(!$('html').hasClass('mobile')){
        $(window).scroll(function(){
            if ($(this).scrollTop() > 150) {
                $('#nav').addClass('collapse-nav');
            } else {
                $('#nav').removeClass('collapse-nav');
            }
        });
    }
    else {
        $('#nav').addClass('collapse-nav');
    }

    /*
    |-----------------------------------------------------------------------------------------------------------------------
    |   Menu Toggle function
    |-----------------------------------------------------------------------------------------------------------------------
    */
    $('.menu-toggle').click(function(){
        $('#main-menu').toggleClass('menu-open');
        return false;
    });


});
