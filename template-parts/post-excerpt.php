<p data-aos="fade-up" data-aos-duration="500">
    <?php
        if (class_exists('kirki')) {
            $churel_excerpt_limit = get_theme_mod('post_excerpt_limit', '30');
        }
        if (!empty($churel_excerpt_limit)) {
            $churel_limit = $churel_excerpt_limit;
        } else {
            $churel_limit = 30;
        }
        if (has_excerpt()) {
            the_excerpt();
        } else {
            echo esc_html(churel_excerpt($churel_limit));
        }
    ?>
</p>