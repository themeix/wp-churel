<?php // If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() && get_comments_number() ) {?>
	    <h4 class="sub-title heading-4 section-title">
         <?php 
            comments_number(esc_html__('0 Comments', 'churel'), esc_html__('1 Comment','churel'), esc_html__('% Comments', 'churel'));

            echo esc_html__(' on ', 'churel'); echo esc_html(get_the_title());
        ?>
        </h4>
        <div class="comments_template">
        
        <?php 
            comments_template();
        ?>
        </div>
    <?php
	}
	else if ( !comments_open() && get_comments_number() ) {?>
     <h4 class="sub-title heading-4 section-title"><?php comments_number(esc_html__('0 Comments', 'churel'), esc_html__('1 Comment','churel'),'%'.esc_html__(' Comments', 'churel')); 
     echo esc_html__(' on ', 'churel'); echo esc_html(get_the_title()); ?></h4>
        <div class="comments_template">
        <?php 
           comments_template();
        ?>
        <p class="comments-closed"> <?php esc_html_e('Comments are closed', 'churel'); ?> </p>
        </div>
    <?php
	}
	else if (comments_open() && !get_comments_number() ) {?>
     <h4 class="sub-title heading-4 section-title"><?php comments_number(esc_html__('0 Comments', 'churel'), esc_html__('1 Comment','churel'),'%'.esc_html__(' Comments', 'churel')); 
     echo esc_html__(' on ', 'churel'); echo esc_html(get_the_title()); ?></h4>
        <div class="comments_template">
        <?php 
           comments_template();
            
        ?>
        </div>
    <?php
	}
	else{
	     echo '';    
	}
        
?>