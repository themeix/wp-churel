<?php if (class_exists('kirki')) : ?>
      <ul class="social-fixed list-inline hide-social">
            <li><a class="facebook" href="<?php echo esc_url(get_theme_mod('facebook_link_settings', 'https://facebook.com/themeix')); ?>"><i class="fab fa-facebook-f"></i></a></li>
            <li><a class="twitter" href="<?php echo esc_url(get_theme_mod('facebook_link_settings', 'https://twitter.com/@themeix_com')); ?>"><i class="fab fa-twitter"></i></a></li>
            <li><a class="instagram" href="<?php echo esc_url(get_theme_mod('facebook_link_settings', 'https://instagram.com')); ?>"><i class="fab fa-instagram"></i></a></li>
            <li><a class="pinterest" href="<?php echo esc_url(get_theme_mod('facebook_link_settings', 'https://pinterest.com')); ?>"><i class="fab fa-pinterest-p"></i></a></li>
      </ul>
<?php endif; ?>