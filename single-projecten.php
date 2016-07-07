<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Ontwerpstudio BE
 * Website:     http://media-critics.nl
 */

get_template_part('header');

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
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php the_title(); ?></h1>
                    <span class="divider"></span>
                </div>
            </div>

            <div class="row">
                <?php

                if(have_rows('project_explanation')){

                    // Count the number of rows to get the column size
                    $rowCount = count(get_field('project_explanation'));
                    if($rowCount == 1){
                        $columnSize = 'col-md-12';
                    }
                    elseif($rowCount == 2){
                        $columnSize = 'col-md-6';
                    }
                    elseif($rowCount == 3){
                        $columnSize = 'col-md-4';
                    }

                    // Loop through the rows and echo the text
                    while(have_rows('project_explanation')) : the_row();
                        ?>
                        <div class="<?php echo $columnSize ?>">
                            <?php echo get_sub_field('text_column'); ?>
                        </div>
                        <?php
                    endwhile;
                }
                ?>
            </div>

            <div class="row">
                <?php

                if(have_rows('project_images')){
                    while(have_rows('project_images')) : the_row();

                        $image = get_sub_field('image');
                        ?>
                        <div class="col-md-12 project-image">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="100%"/>
                        </div>
                        <?php
                    endwhile;
                }
                ?>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <a class="button-border" href="<?php echo get_field('back_to_overview'); ?>">Naar overzicht</a>
                </div>
            </div>
        </div>
    </div>

<?php
get_template_part('footer');