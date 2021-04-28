<?php
if (!defined('CHUREL_THEME_URI')) {
    define('CHUREL_THEME_URI', get_template_directory_uri());
}

define('CHUREL_THEME_DIR', get_template_directory());
define('CHUREL_CSS_URL', CHUREL_THEME_URI . '/assets/css');
define('CHUREL_JS_URL', CHUREL_THEME_URI . '/assets/js');
define('CHUREL_IMG_URL', CHUREL_THEME_URI . '/assets/images');
define('CHUREL_INC_DIR', CHUREL_THEME_DIR . '/inc');
define('CHUREL_THEME', true);


function churel_setup()
{
    /*
    * Switch default core markup for search form, comment form, and comments
    * to output valid HTML5.
    */
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    load_theme_textdomain('churel', get_template_directory() . '/languages');

    // Set the default content width.
    // Set content-width.

    if (!isset($content_width)) {
        $content_width = 900;
    }

    //Support Automatic Feed Links 
    add_theme_support('automatic-feed-links');

    //Support Post-Thumbnails
    add_theme_support('post-thumbnails');

    //Support Titile Tag
    add_theme_support('title-tag');

    //Add Image Size
    add_image_size('churel-featured-image', 730, 430, true);
    add_image_size('churel-featured-post-image', 560, 380, true);
    add_image_size('churel-related-post-thumbnail', 280, 240, true);

    //Support custom background
    add_theme_support('custom-background');

    //Support custom header
    add_theme_support('custom-header');

    //Support custom header
    add_theme_support('custom-logo');

    // Add support for editor styles.
    add_theme_support('editor-styles');

    // Enqueue editor styles.
    add_editor_style('style-editor.css');

    // Load default block styles.
    add_theme_support('wp-block-styles');

    // Add support for responsive embeds.
    add_theme_support('responsive-embeds');

    $defaults = array(
        'height' => 207,
        'width' => 276,
        'flex-height' => false,
        'flex-width' => false,
        'header-text' => array('site-title', 'churel-site-description'),
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'churel_setup');


// INCLUDE FILES
include_once('inc/churel-scripts.php');
include_once('inc/custom-fields.php');
require_once('inc/tgm/class-tgm-plugin-activation.php');
require_once('inc/tgm/recommended-plugins.php');
require get_template_directory() . '/inc/churel-inline-style.php';

if (class_exists('kirki')) {
    require CHUREL_INC_DIR . '/customizer/class-customizer.php';
    require CHUREL_INC_DIR . '/customizer/customizer-options.php';
}


// CHUREL EXCERPT
function churel_excerpt($churel_limits = 25)
{
    $churel_limits = $churel_limits + 1;
    $content = strip_tags(get_the_content());
    $make_index = explode(' ', $content, $churel_limits);
    if (count($make_index) <= $churel_limits) {
        array_pop($make_index);
    }
    $excerpt = implode(' ', $make_index);
    return $excerpt;
}

//ESTIMATED READING TIME
function churel_reading_time()
{
    $content = get_post_field('post_content', get_the_ID());
    $word_count = str_word_count(strip_tags($content));
    $readingtime = ceil($word_count / 200);
    if ($readingtime == 1) {
        $timer = " min read";
    } else {
        $timer = " mins read";
    }
    $totalreadingtime = $readingtime . $timer;
    return $totalreadingtime;
}

//CHUREL NAVBAR
function churel_nav_menus()
{
    register_nav_menus(array(
        'primary_menu' =>  esc_html__('Primary Menu', 'churel'),
    ));
}
add_action('init', 'churel_nav_menus');

function churel_total_authors()
{
    $churel_users = get_users(['role__in' => ['author', 'administrator']]);
    $churel_count = 0;
    foreach ($churel_users as $churel_user) :
        $churel_count++;
    endforeach;

    if ($churel_count == 1) {
        return 'Total ' . $churel_count . ' author';
    } else {
        return 'Total' . $churel_count . ' authors';
    }
}
function churel_total_categories()
{
    $churel_categories = get_categories();
    $churel_count = 0;
    foreach ($churel_categories as $churel_category) :
        $churel_count++;
    endforeach;

    if ($churel_count == 1) {
        $churel_text = sprintf('Total %d category', $churel_count);
    } else {
        $churel_text =  sprintf('Total %d categories', $churel_count);
    }

    return $churel_text;
}
function churel_total_category_posts()
{
    $churel_category = get_term(get_the_category(), 'category');
    $churel_count = $churel_category->count;

    if ($churel_count == 1) {
        $churel_text = sprintf('Total %d post', $churel_count);
    } else {
        $churel_text =  sprintf('Total %d posts', $churel_count);
    }

    return $churel_text;
}

//Comments Layout
function churel_comments($comment, $args, $depth)
{

    ?>
    <li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">

        <div class="churel-comment">
            <div class="comments-info">
                <div class="author-img">
                    <?php echo get_avatar($comment, $args['avatar_size']); ?>
                </div>

                <div class="comment-meta">
                    <h6 class="author">
                        <?php echo get_comment_author_link(); ?>
                        <span class="reply-link">
                            <?php comment_reply_link(array_merge($args, array('reply_text' => esc_html__('Reply', 'churel'), 'depth' => $depth, 'max_depth' => $args['max_depth'])), $comment->comment_ID); ?>
                        </span>
                    </h6>
                    <div class="date-and-edit"><span class="date"><i class="fa fa-calendar"></i><?php echo esc_html(get_comment_date()); ?></span>
                    </div>
                    <?php if (is_user_logged_in()) : ?>
                        <div class="date-and-edit"><span class="date"><i class="fa fa-edit"></i>
                                <span class="edit"> <?php edit_comment_link(esc_html__('Edit', 'churel')); ?> </span>
                        </div>
                    <?php endif; ?>
                    <?php if ($comment->comment_approved == '0') : ?>
                        <em><i class="icon-info-sign"></i> <?php esc_html_e('Comment awaiting approval', 'churel'); ?></em>
                        <br />
                    <?php endif; ?>

                </div>

            </div>

            <div class="comment-text">
                <?php comment_text(); ?>
            </div>

            <!-- <span class="reply-link mobile">
                <?php comment_reply_link(array_merge($args, array('reply_text' => esc_html__('Reply', 'churel'), 'depth' => $depth, 'max_depth' => $args['max_depth'])), $comment->comment_ID); ?>
            </span> -->

        </div>


    </li>

<?php
}
//custom comments form label
function churel_comment_form_text($fields)
{
    $fields['label_submit'] = esc_html__('Add Comment', 'churel');
    $fields['title_reply'] = esc_html__('Leave a Comment', 'churel');

    return $fields;
}
add_filter('comment_form_defaults', 'churel_comment_form_text');


//Churel Sidebar
function churel_sidebar()
{
    register_sidebar(array(
        'name' => esc_html__('Churel Sidebar', 'churel'),
        'id'  => 'churel-sidebar',
        'description' =>  esc_html__('Churel sidebar', 'churel'),
        'before_title' => '<h5 class="sidebar-title heading-5">',
        'after_title' => '</h5>',
        'before_widget' => '<div id="%1$s" class="sidebar-widget widget %2$s">',
        'after_widget' => '</div>'
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer One', 'churel'),
        'id'  => 'footer1',
        'description' =>  esc_html__('Use this sidebar for footer one.', 'churel'),
        'before_title' => '<h5 class="footer-title heading-5">',
        'after_title' => '</h5>',
        'before_widget' => '<div id="%1$s" class="footer-widget sidebar-widget wow fadeIn widget %2$s">',
        'after_widget' => '</div>'
    ));
    register_sidebar(array(
        'name' => esc_html__('Footer Two', 'churel'),
        'id'  => 'footer2',
        'description' =>  esc_html__('Use this sidebar for footer two.', 'churel'),
        'before_title' => '<h5 class="footer-title heading-5">',
        'after_title' => '</h5>',
        'before_widget' => '<div id="%1$s" class="footer-widget sidebar-widget wow fadeIn widget %2$s">',
        'after_widget' => '</div>'
    ));
    register_sidebar(array(
        'name' => esc_html__('Footer Three', 'churel'),
        'id'  => 'footer3',
        'description' =>  esc_html__('Use this sidebar for footer three.', 'churel'),
        'before_title' => '<h5 class="footer-title heading-5">',
        'after_title' => '</h5>',
        'before_widget' => '<div id="%1$s" class="footer-widget sidebar-widget wow fadeIn widget %2$s">',
        'after_widget' => '</div>'
    ));
    register_sidebar(array(
        'name' => esc_html__('Footer Four', 'churel'),
        'id'  => 'footer4',
        'description' =>  esc_html__('Use this sidebar for footer four.', 'churel'),
        'before_title' => '<h5 class="footer-title heading-5">',
        'after_title' => '</h5>',
        'before_widget' => '<div id="%1$s" class="footer-widget sidebar-widget wow fadeIn widget %2$s">',
        'after_widget' => '</div>'
    ));
}
add_action('widgets_init', 'churel_sidebar');


function churel_add_span($links)
{
    $links = str_replace('</a> (', '</a> <span class="cat-count">', $links);
    $links = str_replace(')', '</span>', $links);
    return $links;
}
add_filter('wp_list_categories', 'churel_add_span');

function churel_add_span_in_archive($links)
{
    $links = str_replace('</a>&nbsp;(', '</a><span class="archive-count">', $links);
    $links = str_replace(')</li>', '</span></li>', $links);
    return $links;
}
add_filter('get_archives_link', 'churel_add_span_in_archive');

if (!function_exists('churel_copyright')) {
    function churel_copyright()
    {
        echo "<p>" . esc_html__('&copy;copyright - ', 'churel') . esc_html(date('Y')) . esc_html__(' Churel - Designed by', 'churel') . ' <a href="' . esc_url(home_url()) . '"> ' . esc_html__('Themeix', 'churel') . "</a></p>";
    }
}

function churel_search_form($form)
{
    $form = '<form method="get" action="' . home_url('/') . '">
                <div class="input-group">
                <input type="search" name="s" value="' . get_search_query() . '" class="form-control" placeholder="' . esc_attr__('Search', 'churel') . '">
                <div class="input-group-prepend">
                    <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                </div>
                </div>
            </form>';
    return $form;
}
add_filter('get_search_form', 'churel_search_form');

function churel_subscribe_form()
{
    $form = '<form action="' . home_url('/') . '" method="POST">
        <div class="form-group">
            <input class="subscribe-email" name="email" placeholder="' . esc_attr__('Your Email', 'churel') . '" autocomplete="false">
            <button class="button primary" type="submit">
                ' . esc_html__('Subscribe', 'churel') . '
            </button>
            </div>
    </form>';

    return $form;
}
