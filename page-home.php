<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Ontwerpstudio BE
 * Website:     http://media-critics.nl
 */

/* Template Name: Home */

get_template_part('header');

get_template_part('includes/partials/slider');
?>

    <div class="content-angle"></div>

    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6 content-text">
                    <h1 class="uppercase"><?php echo get_field('about_title'); ?></h1>
                    <span class="divider"></span>
                    <?php echo get_field('about_text') ?>
                    <a class="button-border read-more" href="<?php echo get_field('about_link'); ?>">Lees meer</a>
                </div>

                <div class="col-md-6 content-image">
                    <div class="image-wrap">
                        <?php $about_image = get_field('about_image'); ?>
                        <img src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['alt']; ?>" width="100%"/>
                    </div>
                </div>
            </div>

            <?php get_template_part('includes/partials/row-divider'); ?>

            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="uppercase"><?php echo get_field('services_title'); ?></h1>
                    <span class="divider divider-center"></span>
                </div>

                <?php

                if(get_field('services')){
                    while(have_rows('services')) : the_row();
                        ?>
                        <div class="service col-md-6 text-center">
                            <div class="services-image">
                                <?php $service_image = get_sub_field('service_image'); ?>
                                <img src="<?php echo $service_image['url']; ?>" alt="<?php $service_image['alt']; ?>"/>
                            </div>
                            <h3 class="uppercase"><?php echo get_sub_field('service_title'); ?></h3>
                            <?php echo get_sub_field('service_text'); ?>
                        </div>
                        <?php
                    endwhile;
                }

                ?>
            </div>

            <?php get_template_part('includes/partials/row-divider'); ?>

            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="uppercase"><?php echo get_field('portfolio_title'); ?></h1>
                    <span class="divider divider-center"></span>
                </div>

                <?php

                $args = array(
                    'post_type'         => 'projecten',
                    'posts_per_page'    => ''.get_field('max_projects').'',
                );

                $the_query = new WP_Query($args);

                if($the_query->have_posts()){
                    while($the_query->have_posts()) : $the_query->the_post();
                        if(has_post_thumbnail()){
                            $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
                        }
                        ?>
                        <div class="portfolio-item col-md-4 col-sm-6 col-xs-12">
                            <a href="<?php the_permalink(); ?>">
                                <div class="overlay">
                                    <div class="middle-wrap">
                                        <div class="middle">
                                            <h3><?php the_title(); ?></h3>
                                        </div>
                                    </div>
                                </div>
                                <img src="<?php echo $image[0]; ?>" alt=""/>
                            </a>
                        </div>
                        <?php
                    endwhile;
                }
                else {
                    echo 'There are no posts to display';
                }
                ?>
            </div>

        </div>
    </div>

<?php
get_template_part('footer');