<footer class="new_footer_area bg_color">
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
                                <?php echo churel_subscribe_form(); ?>
                            <?php else : ?>
                                <?php echo do_shortcode($shortcode); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_middle">
        <div class="container">
            <div class="row">
                <div class="row">
                    <?php if (is_active_sidebar('footer1')) : ?>
                        <div class="col-md-3">
                            <?php dynamic_sidebar('footer1'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (is_active_sidebar('footer2')) : ?>
                        <div class="col-md-2">
                            <?php dynamic_sidebar('footer2'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (is_active_sidebar('footer3')) : ?>
                        <div class="col-md-4">
                            <?php dynamic_sidebar('footer3'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (is_active_sidebar('footer4')) : ?>
                        <div class="col-md-3">
                            <?php dynamic_sidebar('footer4'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
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