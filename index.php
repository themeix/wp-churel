<?php get_header(); ?>
<!-- banner area -->


<section class="banner-area m-b-60">
   <div class="container">
      <div class="banner-slider owl-carousel">
         <?php
         $churel_query = new WP_Query(array(
            'post-type' => 'post',
            'order' => "DSC"
         ));
         ?>
         <?php if ($churel_query->have_posts()) : ?>
            <?php while ($churel_query->have_posts()) : $churel_query->the_post(); ?>
               <?php if (class_exists('acf')) : ?>
                  <?php if (get_field('featured') == 'Yes') : ?>
                     <?php get_template_part('template-parts/featured-post-card'); ?>
                  <?php else : ?>
                     <?php if (is_sticky()) : ?>
                        <?php get_template_part('template-parts/featured-post-card'); ?>
                     <?php endif; ?>
                  <?php endif; ?>
               <?php else : ?>
                  <?php if (is_sticky()) : ?>
                     <?php get_template_part('template-parts/featured-post-card'); ?>
                  <?php endif; ?>
               <?php endif; ?>
            <?php endwhile; ?>
         <?php endif; ?>
      </div>

      <?php get_template_part('template-parts/shape'); ?>
   </div>
</section>

<!-- banner area -->
<!-- blog area -->
<section id="content" class="blog-area m-b-60">
    <div class="container">
        <div class="row blog-variation infinite-scroll">
            <?php
            $layout = '';
            if (class_exists('kirki')) {
                $layout = get_theme_mod('churel_page_layout', '2');

                if ($layout == '3') {
                    get_sidebar();
                }
            }
            ?>
            <div class="col-lg-<?php if ($layout == '1' && class_exists('kirki')) {
                                    echo '12 col-md-12';
                                } elseif (!is_active_sidebar('churel-sidebar')) {
                                    echo '12 col-md-12';
                                } else {
                                    echo '8 col-md-7';
                                } ?>">
                <div class="row">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <?php if (!is_sticky()) : ?>

                                <div class="col-lg-<?php if ($layout == '1' && class_exists('kirki')) {
                                                                    echo '6 col-md-12';
                                                                } elseif (!is_active_sidebar('churel-sidebar')) {
                                                                    echo '6 col-md-12';
                                                                } else {
                                                                    echo '12';
                                                                } ?>">
                                    <?php get_template_part('template-parts/index-post-card'); ?>

                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
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


            <?php
            if (class_exists('kirki')) {
                if ($layout == '2') {
                    get_sidebar();
                }
            } else {
                get_sidebar();
            }
            ?>
        </div>


    </div>
</section>
<!-- blog area -->

<?php get_footer(); ?>