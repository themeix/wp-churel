<?php get_header(); 
while (have_posts()) : the_post();
endwhile;

?>
<!-- banner area -->
<section class="page-title-area m-b-60">
   <div class="container">
      <div class="page-title-post category-title overlay" >
         <div class="wrap text-white">
            <h2 class="text-white"><?php the_archive_title(); ?></h2>
            <p><?php the_archive_description(); ?></p>
            <div class="meta-info">
               <span><?php churel_total_category_posts(); ?></span>
            </div>
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
                  <?php get_template_part('template-parts/post-card'); ?>
               </div>
            <?php endwhile; ?>
         <?php endif; ?>
      </div>
   </div>
</section>
<!-- blog area -->




<?php get_footer(); ?>