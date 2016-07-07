<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Ontwerpstudio BE
 * Website:     http://media-critics.nl
 */

/* Template Name: Contact */

get_template_part('header');

get_template_part('includes/partials/slider');
?>

    <div class="content-angle"></div>

    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="uppercase"><?php echo get_field('contact_title'); ?></h1>
                    <span class="divider divider-center"></span>
                </div>
                <div class="col-md-6 col-md-offset-3 text-center">
                    <?php echo get_field('contact_text'); ?>
                </div>
            </div>


            <div class="row form-row">
                <?php echo do_shortcode(get_field('contact_form_7_shortcode')); ?>
            </div>


            <div class="row address-row">
                <div class="col-md-12 text-center">
                    <i class="icon icon-compass"></i>
                    <br/><br/>
                    <address>
                        <p>
                            <i class="icon icon-home"></i>Duiven <br/>
                            <i class="icon-phone"></i>06 301 080 20

                            <br/><br/>

                            <i class="icon icon-home"></i>Barneveld <br/>
                            <i class="icon-phone"></i>06 815 055 24

                            <br/><br/>

                            <a href="mailto:info@ontwerpstudiobe.nl"><i class="icon-mail"></i>info@ontwerpstudiobe.nl</a>
                        </p>
                    </address>

                </div>
            </div>


        </div>
    </div>

<?php
get_template_part('footer');