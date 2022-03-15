<?php

if(!function_exists('preschooltheme_setup')){

    function preschooltheme_setup()
    {
        # Agrego Menus
        register_nav_menus( array(
            'mainmenu'=>'Menu Principal',
        ) );

        # Custom logo.
        $logo_width  = 120;
        $logo_height = 90;
        add_theme_support(
            'custom-logo',
            array(
                'height'      => $logo_height,
                'width'       => $logo_width,
                'flex-height' => true,
                'flex-width'  => true,
            )
        );
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 900, 400, true );

    }

}
add_action('after_setup_theme', 'preschooltheme_setup');

/**
 * Coloca el active en la plantilla
 */
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}

function menu_attribute($atts,$item,$args){
    // $option = get_field('post_title',$item->object_id);
    switch ($item->url) {
        case '#aboutus':
            $atts['data-hash-offset-lg'] = '255';
            break;
        case '#team':
            $atts['data-hash-offset-lg'] = '35';
            break;
        case '#works':
            $atts['data-hash-offset-lg'] = '120';
            break;
        case '#pricing':
            $atts['data-hash-offset-lg'] = '135';
            break;
            
        default:
            $atts['data-hash-offset-lg'] = '70';
            # code...
            break;
        }
        $atts['data-hash'] = ' ';
        $atts['data-hash-offset'] = '0';
        $atts['class'] = 'nav-link';
    return $atts;
}
add_filter('nav_menu_link_attributes','menu_attribute',10,3);