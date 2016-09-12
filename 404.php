<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Ontwerpstudio BE
 * Website:     http://media-critics.nl
 */

get_template_part('header');

?>
<div id="intro-slider">
    <div class="slider-images">
        <ul class="slides-container">
            <?php
            $i = 0;

            if(have_rows('slides', 'option')){
                while(have_rows('slides', 'option')) : the_row();
                    $silder_image = get_sub_field('image');
                    ($i == 0 ? $class = 'active slide' : $class = 'slide');

                    echo '<li class="'.$class.'" data-index="'.$i.'" style="background-image: url('.$silder_image['url'].')"></li>';
                    $i++;
                endwhile;
            }
            ?>
        </ul>
    </div>

    <div class="bg-slider">
        <img src="<?php echo get_stylesheet_directory_uri().'/assets/images/sliderbackground.jpg'; ?>" alt="" width="100%"/>
    </div>
</div>

<div class="content">
    <div class="top-angle"></div>

<!--    <img class="slider-dots" src="--><?php //echo get_stylesheet_directory_uri().'/assets/images/sliderdots.png'; ?><!--" alt="" width="100%"/>-->

    <div class="slider-content">
        <div class="slider-text">
            <ul class="slides-text-container">
                <li class="slide-text-404">
                    <div class="middle-wrap">
                        <div class="middle">
                            <h1 class="slide-title">404 PAGINA NIET GEVONDEN</h1>
                            <span class="fat-divider"></span>
                            <h3 class="slide-subtitle">Mischien bestaat de pagina niet meer <br/><a href="<?php echo get_home_url(); ?>">klik hier om terug te keren naar de homepagina</a></h3>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

    </div>

    <div class="content-angle"></div>

    <div class="content-wrapper">
        <div class="container">
        </div>
    </div>

<?php
get_template_part('footer');