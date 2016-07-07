<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Ontwerpstudio BE
 * Website:     http://media-critics.nl
 */

/* Template Name: About Us */

get_template_part('header');

get_template_part('includes/partials/slider');
?>

    <div class="content-angle"></div>

    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6 content-text">
                    <h1 class="uppercase"><?php echo get_field('about_page_title'); ?></h1>
                    <span class="divider"></span>
                    <?php echo get_field('about_page_text'); ?>
                </div>

                <div class="col-md-6 content-image">
                    <div class="image-wrap">
                        <?php $about_page_image = get_field('about_page_image'); ?>
                        <img src="<?php echo $about_page_image['url']; ?>" alt="<?php echo $about_page_image['alt']; ?>" width="100%"/>
                    </div>
                </div>
            </div>

            <?php get_template_part('includes/partials/row-divider'); ?>

            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="uppercase"><?php echo get_field('team_title'); ?></h1>
                    <span class="divider divider-center"></span>
                </div>

                <?php

                if(get_field('team')){
                    while(have_rows('team')) : the_row();
                        $team_image = get_sub_field('image');
                        ?>
                        <div class="team-item col-md-6 text-center">
                            <div class="team-image" style="background-image: url(<?php echo $team_image['url']; ?>)"></div>

                            <h3 class="uppercase"><?php echo get_sub_field('name'); ?></h3>
                            <h4><?php echo get_sub_field('function'); ?></h4>
                            <?php echo get_sub_field('text'); ?>
                        </div>
                        <?php
                    endwhile;
                }
                ?>
            </div>

            <?php get_template_part('includes/partials/row-divider'); ?>

            <div class="row">
                <div class="col-md-6 content-image">
                    <div class="image-wrap">
                        <?php $profession_image = get_field('profession_image'); ?>
                        <img src="<?php echo $profession_image['url']; ?>" alt="<?php echo $profession_image['alt']; ?>" width="100%"/>
                    </div>
                </div>

                <div class="col-md-6 content-text text-right">
                    <h1 class="uppercase"><?php echo get_field('profession_title'); ?></h1>
                    <span class="divider"></span>
                    <?php echo get_field('profession_text'); ?>
                </div>
            </div>

            <div class="row">
                <?php
                    if(get_field('vision')){
                        while(have_rows('vision')) : the_row();
                            ?>
                            <div class="service col-md-6 text-center">
                                <div class="services-image">
                                    <?php $vision_image = get_sub_field('vision_image'); ?>
                                    <img src="<?php echo $vision_image['url']; ?>" alt="<?php $vision_image['alt']; ?>"/>
                                </div>
                                <h3 class="uppercase"><?php echo get_sub_field('vision_title'); ?></h3>
                                <?php echo get_sub_field('vision_text'); ?>
                            </div>
                            <?php
                        endwhile;
                    }
                ?>
            </div>

            <?php get_template_part('includes/partials/row-divider'); ?>



        </div>
    </div>

<?php
get_template_part('footer');