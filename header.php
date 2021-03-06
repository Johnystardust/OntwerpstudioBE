<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Ontwerpstudio BE
 * Website:     http://media-critics.nl
 */

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head lang="en">
    <meta charset="UTF-8">
    <meta name=viewport content="width=device-width, initial-scale=1">

    <title>Ontwerpstudio BE</title>

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700,500,600,300,200,100' rel='stylesheet' type='text/css'>

    <!-- Enqueue all the styles & scripts -->
    <?php wp_head(); ?>
</head>

<body>
    <div id="nav">
        <div class="container">
            <div class="logo-image">
                <a href="<?php echo get_home_url(); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri().'/assets/images/logo.png'; ?>" alt="" width="230px"/>
                </a>
            </div>

            <div class="menu">
                <a class="menu-toggle" href=""><span class="uppercase">Menu</span><i class="icon-menu"></i></a>
            </div>
        </div>
    </div>

    <div id="main-menu">
        <a class="close-menu" href="#"><i class="icon icon-cancel"></i></a>

        <div class="middle-wrap">
            <div class="middle">
                <div class="menu-effect">
                    <h2 class="text"><?php echo get_the_title(); ?></h2>
                </div>
            </div>
        </div>

        <div id="menu-wrapper">
            <div class="middle-wrap">
                <div class="middle">
                    <div class="menu-ul-wrap">
                        <?php
                        $args = array(
                            'theme_location'  => 'main-menu',
                            'menu'            => '',
                            'container'       => '',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'main-menu',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => ''
                        );

                        wp_nav_menu($args);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

