<?php
$churel_category = get_the_category();
$churel_cat_name = $churel_category[0]->name;
$churel_query = new WP_Query(array(
    'post_type' => 'post',
    'category_name' => "$churel_cat_name",
    'posts_per_page' => 6,
    'post__not_in' => array(get_the_ID()),
));
?>
<?php if ($churel_query->have_posts()) : ?>
    <div class="section-title  mb-4">
        <h3 class="heading-3"><?php echo esc_html__( 'You Might Be Interested In', 'churel' ); ?></h3>
    </div>
    <div class="latest-slider m-b-30  owl-carousel">
        <?php while ($churel_query->have_posts()) : $churel_query->the_post(); ?>
            <div class="item">
                <?php get_template_part('template-parts/post-card'); ?>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </div>

<?php endif; ?>