<?php get_header(); ?>
<!-- blog area -->
<!-- banner area -->
<section id="content" class="blog-area">
   <div class="container">
      <div class="row">
         <?php
            $layout = '';
            if (class_exists('kirki')) {
               $layout = get_theme_mod('blog_single_page_layout', '1');

               if ($layout == '3') {
                  get_sidebar();
               }
            }
         ?>
         <div class="col-lg-<?php if ($layout == '1' && class_exists('kirki')) {
                                 echo '12 col-md-12 ';
                              } elseif (!is_active_sidebar('churel-sidebar')) {
                                 echo '12 col-md-12';
                              } else {
                                 echo '8 col-md-7';
                              } ?>">
            <?php if (have_posts()) : ?>
               <?php while (have_posts()) : the_post(); ?>
                  <div class="entry-title">
                     <div class="meta-info"><span><?php the_time('d F, Y') ?></span>
                        <span>
                           <?php $churel_categories = get_the_category(); ?>
                           <?php foreach ($churel_categories as $churel_category) : ?>

                              <a href="<?php echo esc_url(home_url() . '/category/' . $churel_category->slug); ?>"><?php echo  esc_html('#' . $churel_category->name . '  '); ?></a>

                           <?php endforeach; ?>

                        </span>
                     </div>
                     <h2><?php the_title(); ?></h2>
                     <div class="author">
                        <ul class="avatar">
                           <li><img src="<?php echo esc_url(get_avatar_url(get_the_author_meta('ID'), 60)); ?>" alt="<?php the_author_meta('display_name'); ?>" data-toggle="tooltip" data-placement="top" title="<?php the_author_meta('display_name'); ?>" /></li>
                        </ul>

                        <div class="name">
                           <span><?php the_author_posts_link(); ?></span>
                        </div>
                     </div>
                  </div>

                  <?php if (has_post_thumbnail()) : ?>
                     <div class="page-title-area m-b-60">
                        <div class="page-title-post overlay" style="background-image:url(<?php the_post_thumbnail_url(); ?>);"> </div>
                     </div>
                  <?php endif; ?>

                  <div class="entry-content <?php if ($layout == '1' && class_exists('kirki')) { echo ''; } elseif (!is_active_sidebar('churel-sidebar')) { echo ''; } else { echo ' no-padding';  } ?>">
                     <?php
                           the_content();
                           wp_link_pages(array(
                              'before'      => '<div class="single-page-pagination"><div class="single-page-numbers"><span class="page-links-title">' . esc_html__('Pages : ', 'churel') . '</span>',
                              'after'       => '</div></div>',
                              'separator'   => ' ',
                           ));

                           ?>
                  </div>
               <?php endwhile; ?>
            <?php endif; ?>

            <?php if (!empty(get_the_tags())) : ?>
               <div class="tags-meta m-b-60">
                  <ul class="list-inline">
                     <?php $tax_tags = get_the_tags(); ?>
                     <?php foreach ($tax_tags as $tax_tag) : ?>
                        <li class="list-inline-item"><a href="<?php echo esc_url(home_url() . '/tag/' . $tax_tag->slug); ?>"><?php echo  esc_html($tax_tag->name); ?></a></li>
                     <?php endforeach; ?>
                  </ul>
               </div>
            <?php endif; ?>
            

            <?php if (comments_open() || get_comments_number()) : ?>
               <div class="comments-box m-b-40">
                  <?php get_template_part('template-parts/comments-template'); ?>
               </div>
            <?php endif; ?>
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