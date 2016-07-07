<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Ontwerpstudio BE
 * Website:     http://media-critics.nl
 */
?>

<footer id="footer">
    <div class="bottom-angle"></div>

    <div class="angle-wrapper">
        <div class="footer-angle"></div>
    </div>

    <div class="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Be who you are</h3>
                    <span class="divider"></span>
                    <ul>
                        <li><a class="icon" href="#"><i class="icon-facebook"></i></a></li>
                        <li><a class="icon" href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a class="icon" href="#"><i class="icon-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid no-padding bottom-menu">

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <?php
                    $args = array(
                        'theme_location'  => 'footer-menu',
                        'menu'            => '',
                        'container'       => '',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => 'footer-menu',
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

                <div class="col-md-6 col-xs-12 credits">
                    <span>Gerealiseerd door <a href="#">OSB</a> & <a href="http://media-critics.nl">MEDIA-CRITICS</a></span>
                </div>
            </div>
        </div>

    </div>

</footer>
<?php wp_footer(); ?>

</body>
</html>
