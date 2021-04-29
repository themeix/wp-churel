<div <?php post_class('blog-post'); ?>>
    <div class="blog-wrap">
        <?php
        $churel_category = get_the_category();
        if ($churel_category) {
            echo '<a class="feature-btn" href="' . esc_url(get_category_link($churel_category[0]->term_id)) . '">' . esc_html($churel_category[0]->cat_name) . '</a>';
        }
        ?>
        <div class="author d-flex align-items-center">
            <ul class="avatar">
                <li>
                    <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                        <img src="<?php echo esc_url(get_avatar_url(get_the_author_meta('ID'), 60)); ?>" alt="<?php the_author(); ?>" data-toggle="tooltip" data-placement="top" title="<?php the_author(); ?>" />
                    </a>
                </li>
            </ul>
            <div class="name">
                <span><?php the_author_posts_link();  ?></span>
            </div>
        </div>
        <div class="desc">
            <h4 data-aos="fade-up" data-aos-duration="500"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <div class="meta-info" data-aos="fade-up" data-aos-duration="1500">
                <span> <i class="fa fa-calendar"></i> <?php the_time('d F. Y') ?></span>

                <span><i class="fa fa-clock"></i><?php echo esc_html(churel_reading_time()); ?></span>
                <?php if (is_sticky()) : ?>
                    <span><i class="fa fa-map-pin"></i><?php echo esc_html__( 'Sticky', 'churel' ); ?></span>
                <?php endif; ?>
                
            </div>
        </div>
    </div>
</div>