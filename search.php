<?php get_header();

while (have_posts()) : the_post();
endwhile;

$bg_image = CHUREL_IMG_URL . '/page-title-img.jpg';
if (class_exists('kirki') && !empty(get_theme_mod('search_result_bg'))) {
    $bg_image = get_theme_mod('search_result_bg');
} else {
    $bg_image = CHUREL_IMG_URL . '/page-title-img.jpg';
}
global $wp_query;
$churel_count = $wp_query->found_posts;
if ($churel_count == 1) {
    $churel_text = sprintf('Total %d result found', $churel_count);
} else {
    $churel_text =  sprintf('Total %d results found', $churel_count);
}
?>

<!-- banner area -->
<section class="page-title-area p-b-90">
    <div class="container">
        <div class="page-title-post search-result-title overlay text-white" style="background-image:url(<?php echo esc_url($bg_image); ?>);">
            <div class="wrap">
                <h2 class="text-white mb-2"><?php echo esc_html__('Search results for : ', 'churel'); ?> <strong><?php echo get_search_query(); ?></strong></h2>
                <p>
                    <?php echo esc_html($churel_text); ?>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- banner area -->
<!-- blog area -->
<section id="content" class="blog-area m-b-30">
    <div class="container">
        <div class="row blog-variation infinite-scroll">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="col-lg-6">
                        <?php get_template_part('template-parts/index-post-card'); ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            
        </div>
        <div class="row">
                <div class="col-md-12">
                    <div class="posts-pagination text-center">
                        <?php
                        the_posts_pagination(array(
                            'prev_text'    => esc_html('«'),
                            'next_text'    => esc_html('»'),
                            'mid_size' => '5',
                            'screen_reader_text' => ''
                        ));
                        ?>
                    </div>
                </div>
            </div>
    </div>
</section>
<!-- blog area -->



<?php get_footer(); ?>