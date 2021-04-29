<?php

/**
 * Template Name: Authors Page
 */
get_header();
while (have_posts()) : the_post();
endwhile;

$bg_img  = '';
if(get_theme_mod('authors_banner_bg')){
   $bg_img = get_theme_mod('authors_banner_bg');
}
else if(get_the_post_thumbnail_url( )){ 
   $bg_img = get_the_post_thumbnail_url();
}
?>


<!-- banner area -->
<section class="page-title-area m-b-60">
   <div class="container">
      <div class="page-title-post authors-title overlay" style="background-image:url(<?php echo esc_url($bg_img); ?>);">
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

            <?php $layout = get_theme_mod('category_layout_settings', '1'); ?>
            <div class="col-md-6 col-lg-<?php if($layout == '1'){ echo '4'; }else{ echo '6'; } ?>">
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
                     <p><?php echo esc_html($churel_text); ?></p>
                     <div class="author-bio">

                        <?php if (get_the_author_meta('description', $churel_user->ID)) : ?>
                           <p> <?php echo esc_html( get_the_author_meta('description', $churel_user->ID) ); ?></p>
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