<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Ontwerpstudio BE
 * Website:     http://media-critics.nl
 */

/* Template Name: News */

get_template_part('header');

get_template_part('includes/partials/slider');
?>

    <div class="content-angle"></div>

    <div class="content-wrapper">
        <div class="container">

            <?php

            $args = array(
                'post_type'         => 'post',
                'posts_per_page'    => '',
            );

            $the_query = new WP_Query($args);

            if($the_query->have_posts()){
                while($the_query->have_posts()) : $the_query->the_post();
                    if(has_post_thumbnail()){
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
                    }
                    $date = get_the_date();
                    ?>
                    <div class="row news-row">
                        <div class="col-md-6 news-image">
                            <img src="<?php echo $image[0] ?>" alt="" width="100%"/>
                        </div>
                        <div class="col-md-6 news-text">
                            <h3 class="uppercase"><?php the_title(); ?></h3>
                            <span class="divider"></span>
                            <?php
                                $text = get_field('news_text');
                                echo apply_filters('acf', $text);
                            ?>
                            <p class="date uppercase">Geplaatst op <?php echo $date; ?></p><br/>
                            <a class="button-border read-more" href="<?php the_permalink(); ?>">Lees meer</a>
                        </div>
                    </div>
                    <?php
                endwhile;
            }
            else {
                echo 'There are no posts to display';
            }
            ?>

            <div class="row">
                <div class="col-md-12 text-center">
                    <a class="button-full load-more" href="#">Laad meer</a>
                </div>
            </div>

        </div>
    </div>

<?php
get_template_part('footer');