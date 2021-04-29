<div class="item">
    <div class="banner-post">
        <div class="row d-flex align-items-stretch">
            <div class="col-md-6 col-lg-6 order-md-1" data-aos="fade-down" data-aos-duration="2000">
                <div class="thumbnail">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('churel-featured-post-image'); ?>
                    <?php else : ?>
                        <img src="<?php echo esc_url(CHUREL_IMG_URL . '/image-prev.png'); ?>" alt="<?php the_title(); ?>">
                    <?php endif;  ?>
                    </a>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center col-lg-6 order-md-0">
                <div class="content">
                    <div class="wrap">
                        <div class="meta-info">
                            <span> <?php the_time('d F. Y') ?></span>

                            <span></i><?php echo esc_html(churel_reading_time()); ?></span>
                            <?php if (is_sticky()) : ?>
                                <span><i class="fa fa-map-pin"></i><?php echo esc_html__('Sticky', 'churel'); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="desc">
                            <h1> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h1>
                            <?php get_template_part('template-parts/post-excerpt'); ?>
                        </div>
                        <div class="author">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>