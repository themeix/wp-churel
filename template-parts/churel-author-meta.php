<div class="author-bio-slider owl-carousel m-b-60">
   <div class="item">
      <div class="wrap">
         <div class="author">
            <div class="thumbnail">
               <?php echo get_avatar(get_the_author_meta('ID'), 65); ?>
            </div>
            <div class="name">
               <h6><?php the_author_posts_link(); ?></h6>
               <span>
                  <?php
                     $churel_count = count_user_posts(get_the_author_meta('ID'));

                     if ($churel_count == 1) {
                        $churel_text = sprintf('Total %d post', $churel_count);
                     } else {
                        $churel_text =  sprintf('Total %d posts', $churel_count);
                     }    
                     echo esc_html( $churel_text );             
                  ?>
               </span>
            </div>
         </div>
         <div class="content">
               
            <p><?php echo esc_html(get_the_author_meta('description', get_the_author_meta('ID'))); ?> </p>

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
</div>