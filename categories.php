<?php

/**
 * Template Name: Categories Page
 */
get_header(); 

while (have_posts()) : the_post();
endwhile;


?>

<!-- banner area -->
<section class="page-title-area m-b-60">
   <div class="container">
      <div class="page-title-post categories-title overlay">
         <div class="wrap">
            <h2 class="text-white"><?php the_title(); ?></h2>
            <p>
               <?php
               if (has_excerpt()) {
                  the_excerpt();
               } else {
                  echo esc_html(churel_excerpt(35));
               }
               ?></p>
            <div class="meta-info">
               <span class="text-white"><?php echo esc_html(churel_total_categories()); ?></span>
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
         <?php $churel_categories = get_categories(); ?>
         <?php foreach ($churel_categories as $churel_category) : 
            $churel_count = $churel_category->count;
            if ($churel_count == 1) {
               $churel_text = sprintf('Total %d post', $churel_count);
            } else {
               $churel_text =  sprintf('Total %d posts', $churel_count);
            }
            
            ?>

            <div class="col-md-6 col-lg-4">
               <div class="category-post">
                  <div class="desc">
                     <h4><a href="<?php echo esc_url(home_url() . '/category/' . $churel_category->slug); ?>"><?php echo esc_html($churel_category->name); ?></a></h4>
                     <div class="meta-info"><span>
                           <?php echo esc_html( $churel_text ); ?>
                        </span></div>
                     <p><?php echo esc_html($churel_category->description); ?></p>
                  </div>
               </div>
            </div>
         <?php endforeach; ?>
      </div>
   </div>
</section>
<!-- blog area -->



<?php get_footer(); ?>