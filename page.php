<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Ontwerpstudio BE
 * Website:     http://media-critics.nl
 */

get_template_part('header');

get_template_part('includes/partials/slider');
?>

    <div class="content-angle"></div>

    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <?php the_title(); ?>
                    <?php the_content(); ?>

                <?php endwhile; else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php
get_template_part('footer');