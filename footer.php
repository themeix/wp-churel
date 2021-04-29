<footer class="new_footer_area bg_color">
    <?php if(get_theme_mod('subscriber_toggle_setting') == '1'): ?>
        <div class="new_footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <div class="footer-top py-5">
                            <div class="subscribe-form text-center">
                                <?php
                                $subscribe_title = '';
                                $subtitle = '';
                                $shortcode = '';
                                if (class_exists('kirki')) :
                                    $subscribe_title = get_theme_mod('subscribe_title', 'Subscribe');
                                    $subtitle = get_theme_mod('subscribe_desc', 'Stay up to date! Get all the latest posts delivered straight to your inbox.');
                                    $shortcode = get_theme_mod('form_shortcode', '[contact-form-7 id="2350" title="Subscribe Form"]');
                                endif;
                                ?>

                                <h2 class="subscription-title">
                                    <?php echo esc_html($subscribe_title); ?></h2>
                                <p class="subscription-description">
                                    <?php echo esc_html($subtitle); ?>
                                </p>

                                <?php if (!function_exists('wpcf7_contact_form') || empty($shortcode)) : ?>
                                    <?php churel_subscribe_form(); ?>
                                <?php else : ?>
                                    <?php echo do_shortcode($shortcode); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if (is_active_sidebar('footer1') || is_active_sidebar('footer2') || is_active_sidebar('footer3') || is_active_sidebar('footer4')): ?>
    <div class="footer_middle">
        <div class="container">
            <div class="row">
                <div class="row">
                        <?php $layout = get_theme_mod('footer_layout', '8'); ?>

                        <div class="col-md-6 col-lg-<?php if ($layout == '1') {
                                                            echo '4';
                                                        } else if ($layout == '2') {
                                                            echo '3';
                                                        } else if ($layout == '3') {
                                                            echo '4';
                                                        } else if ($layout == '4') {
                                                            echo '3';
                                                        } else if ($layout == '5') {
                                                            echo '6';
                                                        } else if ($layout == '6') {
                                                            echo '4';
                                                        } else if ($layout == '7') {
                                                            echo '4';
                                                        } else if ($layout == '8') {
                                                            echo '3';
                                                        } else {
                                                            echo '3';
                                                        } ?>">
                            <?php dynamic_sidebar('footer1'); ?>
                        </div>

                        <div class="col-md-6 col-lg-<?php if ($layout == '1') {
                                                            echo '4';
                                                        } else if ($layout == '2') {
                                                            echo '3';
                                                        } else if ($layout == '3') {
                                                            echo '2';
                                                        } else if ($layout == '4') {
                                                            echo '3';
                                                        } else if ($layout == '5') {
                                                            echo '6';
                                                        } else if ($layout == '6') {
                                                            echo '2';
                                                        } else if ($layout == '7') {
                                                            echo '3';
                                                        } else if ($layout == '8') {
                                                            echo '2';
                                                        } else {
                                                            echo '2';
                                                        } ?>">
                            <?php dynamic_sidebar('footer2'); ?>
                        </div>
                        <div class="col-md-6 col-lg-<?php if ($layout == '1') {
                                                            echo '4';
                                                        } else if ($layout == '2') {
                                                            echo '3';
                                                        } else if ($layout == '3') {
                                                            echo '3';
                                                        } else if ($layout == '4') {
                                                            echo '2';
                                                        } else if ($layout == '5') {
                                                            echo '6';
                                                        } else if ($layout == '6') {
                                                            echo '4';
                                                        } else if ($layout == '7') {
                                                            echo '2';
                                                        } else if ($layout == '8') {
                                                            echo '4';
                                                        } else {
                                                            echo '4';
                                                        } ?>">
                            <?php dynamic_sidebar('footer3'); ?>
                        </div>

                        <?php
                            if ($layout == '1') {
                                echo '';
                            } else { ?>
                            <div class="col-md-6 col-lg-<?php if ($layout == '1') {
                                                                    echo '4';
                                                                } else if ($layout == '2') {
                                                                    echo '3';
                                                                } else if ($layout == '3') {
                                                                    echo '3';
                                                                } else if ($layout == '4') {
                                                                    echo '4';
                                                                } else if ($layout == '5') {
                                                                    echo '6';
                                                                } else if ($layout == '6') {
                                                                    echo '2';
                                                                } else if ($layout == '7') {
                                                                    echo '3';
                                                                } else if ($layout == '8') {
                                                                    echo '3';
                                                                } else {
                                                                    echo '3';
                                                                } ?>">
                                <?php dynamic_sidebar('footer4'); ?>
                            </div>
                        <?php
                            }
                            ?>
                    </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="footer_bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <p class="mb-0">
                        <?php
                        if (get_theme_mod('copyright_text')) {
                            echo esc_html(get_theme_mod('copyright_text'));
                        } else {
                            churel_copyright();
                        }
                        ?></p>
                </div>
            </div>
        </div>
        <?php if (get_theme_mod('back_to_top', '1')) : ?>
            <a href="#" id="return-top"><i class="fas fa-angle-up"></i></a>
        <?php endif; ?>
    </div>
</footer>



<?php wp_footer(); ?>
</body>

</html>