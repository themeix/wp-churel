<?php get_header();

while (have_posts()) : the_post();
endwhile;
$churel_count = count_user_posts(get_the_author_meta('ID'));
if ($churel_count == 1) {
   $churel_text = sprintf('Total %d post', $churel_count);
} else {
   $churel_text =  sprintf('Total %d posts', $churel_count);
}
?>

<!-- banner area -->
<section class="page-title-area p-b-90">
   <div class="container">
      <div class="page-title-post author-title overlay text-white">
         <div class="wrap">

            <div class="author-img mb-2">
               <?php echo get_avatar(get_the_author_meta('ID'), 345); ?>
            </div>
            <h2 class="text-white mb-2"><?php the_author(); ?></h2>

            <p><?php echo esc_html(get_the_author_meta('description', get_the_author_meta('ID'))); ?> </p>

            <div class="meta-info">
               <span class="mb-3 d-block">
                  <?php echo esc_html( $churel_text ); ?>
               </span>
            </div>


            <ul class="social-link list-inline">
               <?php if (get_the_author_meta('facebook', get_the_author_meta('ID'))) : ?>
                  <li class="list-inline-item"><a href="<?php echo esc_url(get_the_author_meta('facebook', get_the_author_meta('ID'))); ?>"><i class="fab fa-facebook-f"></i></a></li>
               <?php endif; ?>
               <?php if (get_the_author_meta('twitter', get_the_author_meta('ID'))) : ?>
                  <li class="list-inline-item"><a href="<?php echo esc_url(get_the_author_meta('twitter', get_the_author_meta('ID'))); ?>"><i class="fab fa-twitter"></i></a></li>
               <?php endif; ?>
               <?php if (get_the_author_meta('instagram', get_the_author_meta('ID'))) : ?>
                  <li class="list-inline-item"><a href="<?php echo esc_url(get_the_author_meta('instagram', get_the_author_meta('ID'))); ?>"><i class="fab fa-instagram"></i></a></li>
               <?php endif; ?>
            </ul>
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