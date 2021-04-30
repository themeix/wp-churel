<script>
    (function($) {


        "use strict";

        <?php if (get_theme_mod('preloader_settings', '1')) : ?>
            /*  Preloader*/
            $(window).on('load', function() {

                var preLoder = $(".lds-css");
                preLoder.fadeOut(1000);

            });
        <?php endif; ?>


        jQuery('ul.sf-menu').superfish();


        <?php if (get_theme_mod('aos_animation_js_toggle_setting', '1')) : ?>
            /*  AOS */
            AOS.init({
                offset: 120,
                delay: 0,
                duration: 400,
                easing: 'ease',
                once: true,
                mirror: false,
                anchorPlacement: 'top-bottom'

            });
        <?php endif; ?>


        <?php if (get_theme_mod('popper_js_toggle_setting', '1')) : ?>
            /*  tooltip */
            $('[data-toggle="tooltip"]').tooltip();
        <?php endif; ?>


        <?php if (get_theme_mod('fitvids_js_toggle_setting', '0')) : ?>
            /*  fitVids */
            $(".container").fitVids();
        <?php endif; ?>


        <?php if (get_theme_mod('social_fixed_settings', '1')) : ?>
            /*  social fixed */

            var header = $(".social-fixed");
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();

                if (scroll >= 600) {
                    header.removeClass('hide-social').addClass("show-social");
                } else {
                    header.removeClass("show-social").addClass('hide-social');
                }
            });
        <?php endif; ?>


        <?php if (get_theme_mod('back_to_top', '1')) : ?>
            /*  scrollTop */

            $(window).scroll(function() {
                if ($(this).scrollTop() >= 50) {
                    $('#return-top').fadeIn(200);
                } else {
                    $('#return-top').fadeOut(200);
                }
            });

            $('#return-top').on('click', function() {
                    $('body,html').animate({
                        scrollTop: 0
                    }, 500);
                }

            );
        <?php endif;  ?>

    }(jQuery));
</script>