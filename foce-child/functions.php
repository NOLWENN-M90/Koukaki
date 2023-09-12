
<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    
    
    // wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/wp-content/themes/foce/style.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    //  Chargement du style personnalisé pour le theme
    wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . '/assets/sass/style.css' );        
    
    wp_enqueue_script('swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@10.1.0/swiper-bundle.min.js', array(), '1.0.0', true);
    
    // Enqueue Custom Scripts
    wp_enqueue_script('lightbox', get_stylesheet_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0', true);
}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}