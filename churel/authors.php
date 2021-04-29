<?php

/**
 * Template Name: Authors Page
 */
get_header();
while (have_posts()) : the_post();
endwhile;

?>

<!-- banner area -->
<section class="page-title-area m-b-60">
   <div class="container">
      <div class="page-title-post authors-title overlay">
         <div class="wrap">
            <h2 class="text-white"><?php the_title(); ?></h2>
            <p>
               <?php
               if (has_excerpt()) {
                  the_excerpt();
               } else {
                  echo esc_html(churel_excerpt(35));
               }
               ?>
            </p>
            <div class="meta-info">

               <span class="text-white"><i class="far fa-user"></i><?php echo esc_html(churel_total_authors()); ?></span>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- banner area -->
<!-- blog area -->
<section id="content" class="blog-area m-b-30">
   <div class="container">
      <div class="row authors-variation">
         <?php $churel_users = get_users(['role__in' => ['author', 'administrator']]); ?>
         <?php foreach ($churel_users as $churel_user) : ?>
            <div class="col-md-6 col-lg-4">
               <div class="author-post">
                  <div class="thumbnail">
                     <?php echo get_avatar($churel_user->ID, 345); ?>
                  </div>
                  <div class="content">
                     <h4><a href="<?php echo esc_url(home_url() . '/author/' . $churel_user->user_nicename); ?>"><?php echo esc_html($churel_user->display_name); ?></a></h4>
                     <?php 
                        
                        $churel_count = count_user_posts($churel_user->ID);
                        if ($churel_count == 1) {
                           $churel_text = sprintf('Total %d post', $churel_count);
                        } else {
                           $churel_text =  sprintf('Total %d posts', $churel_count);
                        }
                     ?>
                     <p><<?php echo esc_html($churel_text); ?></p>
                     <div class="social">

                        <?php if (get_the_author_meta('facebook', $churel_user->ID)) : ?>
                           <span><a href="<?php echo esc_url(get_the_author_meta('facebook', $churel_user->ID)); ?>"><i class="fab fa-facebook-f"></i></a></span>
                        <?php endif; ?>

                        <?php if (get_the_author_meta('twitter', $churel_user->ID)) : ?>
                           <span><a href="<?php echo esc_url(get_the_author_meta('twitter', $churel_user->ID)); ?>"><i class="fab fa-twitter"></i></a></span>
                        <?php endif; ?>

                        <?php if (get_the_author_meta('instagram', $churel_user->ID)) : ?>
                           <span><a href="<?php echo esc_url(get_the_author_meta('instagram', $churel_user->ID)); ?>"><i class="fab fa-instagram"></i></a></span>
                        <?php endif; ?>

                     </div>
                  </div>
               </div>
            </div>
         <?php endforeach; ?>
      </div>
   </div>
</section>

<!-- blog area -->


<?php get_footer(); ?>