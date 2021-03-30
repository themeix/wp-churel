<?php

/**
 * Template Name: Front Page
 */

get_header(); ?>
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
         $churel_query = new WP_Query(array(
            'post-type' => 'post',
            'order' => "DSC",
            'paged' => get_query_var('page') ? get_query_var('page') : 1
         ));
         ?>
         <?php if ($churel_query->have_posts()) : ?>
            <?php while ($churel_query->have_posts()) : $churel_query->the_post(); ?>
               <?php if (class_exists('acf')) : ?>
                  <?php if (get_field('featured') != 'Yes') : ?>
                     <div class="col-lg-6">
                        <?php get_template_part('template-parts/post-card'); ?>
                     </div>
                  <?php endif; ?>
               <?php else : ?>
                  <?php if (!is_sticky()) : ?>
                     <div class="col-lg-6">
                        <?php get_template_part('template-parts/post-card'); ?>
                     </div>
                  <?php endif; ?>
               <?php endif; ?>
            <?php endwhile; ?>
         <?php endif; ?>
      </div>
      <div class="posts-pagination text-center">
         <?php
         $churel_total_pages = $churel_query->max_num_pages;

         if ($churel_total_pages > 1) {

            $churel_current_page = max(1, get_query_var('page'));

            echo wp_kses_post( paginate_links(array(
               'current' => $churel_current_page,
               'total' => $churel_total_pages,
               'prev_text'    => esc_html('«'),
               'next_text'    => esc_html('»'),
            )) ) ;
         }
         ?>
      </div>
   </div>
</section>
<!-- blog area -->



<?php get_footer(); ?>