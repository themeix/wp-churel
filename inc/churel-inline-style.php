<?php

function churel_inline_style()
{
    wp_enqueue_style(
        'churel-stylesheet',
        CHUREL_THEME_URI . '/style.css'
    );

    if (!empty(get_header_image())) {
        $header_bg = 'url(' . esc_url(get_header_image()) . ')';
    } else {
        $header_bg = '#ffffff';
    }

    $bg_image = CHUREL_IMG_URL . '/page-title-img.jpg';
    if (class_exists('kirki') && !empty(get_theme_mod('author_banner_bg'))) {
        $bg_image = esc_url(get_theme_mod('author_banner_bg'));
    } else {
        $bg_image = CHUREL_IMG_URL . '/page-title-img.jpg';
    }

    $custom_css = '
    :root, [data-theme="default"] {
        --churel-primary-color: ' . esc_attr(get_theme_mod('churel_primary_color', '#f44336')) . ' ;
        --churel-secondary-color: ' . esc_attr(get_theme_mod('churel_secondary_color', '#333333')) . ';
        --churel-text-color:' . esc_attr(get_theme_mod('churel_text_color', '#383143')) . ';
        }
        .page-title-post{
            background-image: url('.esc_url($bg_image).');
        }
        .header-area{
            background: ' . esc_attr($header_bg) . ';
            background-size: cover;
            background-repeat: no-repeat;
        }
        .header-logo img{
            max-width: ' . esc_attr(get_theme_mod('brand') . 'px') . '!important;
            width: ' . esc_attr(get_theme_mod('brand') . 'px') . '!important;
            max-height: 150px;
            height: auto;
        }
        p.site-description {
            font-size: 14px;
            margin: 0;
          }
          
        .authors-title.overlay:before{
            background-color: ' . esc_attr(get_theme_mod('authors_bg_overlay', '')) . ';
        }
        .author-title.overlay:before{
            background-color: ' . esc_attr(get_theme_mod('author_bg_overlay', '')) . ';
        }
        .categories-title.overlay:before{
            background-color: ' . esc_attr(get_theme_mod('categories_bg_overlay', '')) . ';
        }
        .category-title.overlay:before{
            background-color: ' . esc_attr(get_theme_mod('category_bg_overlay', '')) . ';
        }
        .search-result-title.overlay:before{
            background-color: ' . esc_attr(get_theme_mod('search_result_overlay', '')) . ';
        }

        @media only screen and (max-width: 480px) {
            .header-logo img {
              width: 160px!important;
              max-height: 150px;
            }
        }
    ';

    wp_add_inline_style('churel-stylesheet', $custom_css);
}
add_action('wp_enqueue_scripts', 'churel_inline_style');
