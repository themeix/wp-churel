<?php

/**
 * Header file for the Churel WordPress theme.
 *
 * @link Themeix
 *
 * @package WordPress
 * @subpackage Churel
 * @since Churel 1.0.5
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
   <?php wp_body_open(); ?>
   <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'churel'); ?></a>
   <!-- preloader -->
   <?php if (get_theme_mod('preloader_settings', '1')) : ?>
      <div class="lds-css">
         <div class="lds-flickr">
            <div></div>
            <div></div>
            <div></div>
         </div>
      </div>
   <?php endif; ?>

   <!-- social fjxed -->
   <?php if (class_exists('kirki')) : ?>
      <?php if (get_theme_mod('social_fixed_settings', '1')) : ?>
         <?php get_template_part('template-parts/social-fixed'); ?>
      <?php endif; ?>
   <?php endif; ?>

   <!-- header area -->
   <header class="header-area ">
      <div class="container">
         <div class="row">
            <div class="  col-lg-3 d-flex align-items-center ">
               <div class="header-logo">
                  <?php if (has_custom_logo()) : ?>
                     <div class="logo"><a href="<?php echo esc_url(home_url()); ?>"><?php the_custom_logo(); ?></a> </div>
                  <?php endif; ?>

                  <?php if (!empty(get_bloginfo('name')) && display_header_text()) : ?>
                     <div class="site-identity">
                        <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                        <p class="site-description"><?php echo esc_html(get_bloginfo('description', 'display')); ?></p>
                     </div>
                  <?php endif; ?>

               </div>
            </div>
            <div class="col-lg-9 justify-content-end d-flex align-items-center ">
               <div class="themeix-menu <?php if(!has_custom_logo()){ echo 'has-no-custom-logo';} ?>" >

                  <button id="hamburger-open" class="menu-btn"><i class="fa fa-bars"></i> <?php echo esc_html__('Menu', 'churel'); ?></button>
                  <button id="hamburger-close" class="sf-hidden menu-btn"><i class="fa fa-plus"></i> <?php echo esc_html__('Close', 'churel'); ?></button>

                  <?php
                  wp_nav_menu(array(
                     'theme_location' => 'primary_menu',
                     'menu_class' => 'sf-menu sf-hidden',
                     'menu_id' => 'main-menu',
                     'container' => 'ul'
                  ));

                  ?>


                  <button data-target="#search-modal" class="search-modal" data-toggle="modal"><i class="fas fa-search"></i></button>
               </div>
            </div>
         </div>
         <!-- Modal -->
         <div class="modal fade" id="search-modal" tabindex="1" role="dialog">
            <a href="#" class="close" tabindex="3" data-dismiss="modal">
               <span aria-hidden="true">&times;</span>
            </a>
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <form class="modal-header" method="get" action="<?php echo esc_url(home_url()); ?>">
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <button class="btn btn-secondary" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                        <input type="search" tabindex="2" name="s" id="input-focus" class="form-control" placeholder="<?php echo esc_attr__('Search Here', 'churel'); ?>">
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- header -->