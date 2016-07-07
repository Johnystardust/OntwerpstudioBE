<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Ontwerpstudio BE
 * Website:     http://media-critics.nl
 */

get_template_part('header');

$date = get_the_date();
?>
<div id="intro-header">
    <div class="header-image">
        <?php
        $header_image = get_field('project_header_image');
        ?>
        <div class="head-image" style="background-image: url(<?php echo $header_image['url']; ?>)"></div>
    </div>
</div>

<div class="content">
    <div class="top-angle"></div>

    <!--    <img class="slider-dots" src="--><?php //echo get_stylesheet_directory_uri().'/assets/images/sliderdots.png'; ?><!--" alt="" width="100%"/>-->

    <div class="header-content">
        <div class="header-text">
            <div class="middle-wrap">
                <div class="middle">
                    <h1 class="header-title"><?php echo get_field('project_header_title'); ?></h1>
                    <span class="fat-divider"></span>
                    <h3 class="header-subtitle"><?php echo get_field('project_header_subtitle'); ?></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="content-angle"></div>

    <div class="content-wrapper">
        <div class="container single-news">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="row">
                <div class="col-md-12 head-image">
                    <?php $news_image = get_field('news_image'); ?>
                    <img src="<?php echo $news_image['url']; ?>" alt="<?php echo $news_image['alt'] ?>" width="100%"/>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 text">
                    <h3 class="uppercase"><?php the_title(); ?></h3>
                    <span class="divider"></span>

                    <?php echo get_field('news_text'); ?>

                    <br/><br/>
                    <p class="date uppercase">Geplaatst op <?php echo $date; ?></p><br/>

                    <a class="button-border" href="#">Naar overzicht</a>

                    <?php
                    $next_post              = get_next_post();
                    $next_permalink         = get_permalink($next_post->ID);

                    $prev_post              = get_previous_post();
                    $prev_permalink         = get_permalink($prev_post->ID);

                    $previous_adjacent_post = get_adjacent_post(false, '', true);
                    $next_adjacent_post     = get_adjacent_post(false, '', false);

                    ?>
                    <div class="post-menu">
                        <span class="line"></span>
                        <?php
                        if($previous_adjacent_post){
                            ?>
                            <a class="previous" href="<?php echo $prev_permalink; ?>">
                                <i class="icon-left"></i>vorige bericht
                                <h4 class="uppercase"><?php echo $prev_post->post_title; ?></h4>
                            </a>
                            <?php
                        }

                        if($next_adjacent_post){
                            ?>
                            <a class="next" href="<?php echo $next_permalink; ?>">
                                volgende bericht<i class="icon-right"></i>
                                <h4 class="uppercase"><?php echo $next_post->post_title; ?></h4>
                            </a>
                        <?php
                        }
                        ?>
                        <span class="line"></span>
                    </div>
                </div>

                <div class="col-md-4 col-md-offset-1 post-info">

                    <div class="post-info-wrap">
                        <h4 class="uppercase">Tags</h4>
                        <ul class="tags-collection">
                            <li><a class="tag" href="">Branding</a></li>
                            <li><a class="tag" href="">Design</a></li>
                        </ul>
                    </div>

                    <div class="post-info-wrap">
                        <h4 class="uppercase">Geschreven door</h4>
                        <p><?php the_author();?> op <?php echo $date; ?></p>
                    </div>

                    <div class="post-info-wrap">
                        <h4 class="uppercase">Delen</h4>
                        <ul class="share-collection">
                            <li><a href=""><i class="icon-instagram"></i></a></li>
                            <li><a href=""><i class="icon-facebook"></i></a></li>
                            <li><a href=""><i class="icon-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
        </div>
    </div>

<?php
get_template_part('footer');