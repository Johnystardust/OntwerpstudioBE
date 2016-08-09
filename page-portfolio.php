<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Ontwerpstudio BE
 * Website:     http://media-critics.nl
 */

/* Template Name: Portfolio */

get_template_part('header');

get_template_part('includes/partials/slider');
?>

        <div class="content-angle"></div>

        <div class="content-wrapper">
            <div class="container">
                <div class="row portfolio-title">
                    <div class="col-md-12 text-center">
                        <h3>Wij zijn een kleine ontwerpstudio in Nederland<br/>wij ontwerpen alles voor particulieren en bedrijven</h3>
                    </div>
                </div>

                <div class="row text-center">
                    <div class="col-md-12">
                        <ul class="portfolio-category-menu">
                            <li><a class="active-menu" href="#">Alles</a></li>
                            <li><a href="#">Huisstijlen</a></li>
                            <li><a href="#">Promotiemiddelen</a></li>
                            <li><a href="#">Web</a></li>
                        </ul>
                    </div>

                    <?php

                    $args = array(
                        'post_type'         => 'projecten',
                        'posts_per_page'    => '',
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



                    <a class="button-full load-more" href="#">Laad meer</a>

                </div>
            </div>
        </div>

<?php
get_template_part('footer');