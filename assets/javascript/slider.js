$(document).ready(function(){

    var slider = $('#intro-slider');
    var ul = slider.find('.slides-container');
    var slide_count = ul.children().length;

    var sliderContent = $('.slider-content');

    var slide_index = 0;

    var windowHeight = $(window).height();

    /*
    |----------------------------------------------------------------
    |  Set slider height to windowHeight.
    |----------------------------------------------------------------
    */
    slider.height(windowHeight);
    sliderContent.height(windowHeight);

    $(window).resize(function(){
        var windowHeight = $(window).height();

        slider.height(windowHeight);
        sliderContent.height(windowHeight);
    });


    /*
     |----------------------------------------------------------------
     |  Slide Function.
     |----------------------------------------------------------------
     */
    function slide(new_slide_index){
        $('.active').removeClass('active');

        $('li[data-index="'+new_slide_index+'"]').addClass('active');

        slide_index = new_slide_index;
    }

    /*
     |----------------------------------------------------------------
     |  Timer Function
     |----------------------------------------------------------------
     */
    var timer;

    function slide_timer(){
        if(slide_index <= (slide_count - 2)){
            slide(parseInt(slide_index) + 1);
        }
        else {
            slide(0);
            slide_index = 0;
        }
    }
    timer = setInterval(slide_timer, 6000);

});