<?php 
add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'fonts-Inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
    wp_enqueue_style( 'fonts-Montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap');
	wp_enqueue_style( 'style-fotorama',get_template_directory_uri() . '/assets/css/fotorama.css');
	wp_enqueue_style( 'style',get_template_directory_uri() . '/assets/css/style.min.css');
    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js');
	wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), null, true);
    wp_enqueue_script( 'fotorama', get_template_directory_uri() . '/assets/js/fotorama.js', array('jquery'), null, true);
	wp_enqueue_script( 'script-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true );
} );

add_theme_support('post-thumbnails')
?>
