<?php get_header(); ?>
<!-- header -->

<!-- blog area -->
<section  id="content" class="blog-area">
   <div class="container">
      <div class="errror-post text-center p-t-90 p-b-90">
         <img class="m-b-30" src="<?php echo esc_url( CHUREL_IMG_URL.'/404-logo.png'); ?>" alt="<?php echo esc_attr__( '404 logo', 'churel' )?>" />
         <h4 class="m-b-30"><?php echo esc_html__( 'Sorry the page not found', 'churel' )?></h4>
         <a href="<?php echo esc_url(home_url()); ?>" class="home-top btn btn-primary"><?php echo esc_html__( 'Back to Home', 'churel' )?></a>
      </div>
   </div>
</section>
<!-- blog area -->
<?php get_footer(); ?>