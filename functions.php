<?php
// This function enqueues the Normalize.css for use. The first parameter is a name for the stylesheet, the second is the URL. Here we
// use an online version of the css file.
function add_normalize_CSS() {
    wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
}

// Register a new sidebar simply named 'sidebar'
function add_widget_Support() {
                register_sidebar( array(
                                'name'          => 'Sidebar',
                                'id'            => 'sidebar',
                                'before_widget' => '<div>',
                                'after_widget'  => '</div>',
                                'before_title'  => '<h2>',
                                'after_title'   => '</h2>',
                ) );
}
// Hook the widget initiation and run our function
add_action( 'widgets_init', 'add_Widget_Support' );

// Register a new navigation menu
function add_Main_Nav() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
// Hook to the init action hook, run our navigation menu function
add_action( 'init', 'add_Main_Nav' );

//recherche css
function additional_custom_styles() {

    /*Enqueue The Styles*/
    // wp_enqueue_style( 'themename', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_style( 'themename', get_template_directory_uri() . '/css/materialize.css');

}
add_action( 'wp_enqueue_scripts', 'additional_custom_styles' );


function theme_js() {

	global $wp_scripts;

  wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-2.1.1.min.js');
	wp_enqueue_script( 'materialize_js', get_template_directory_uri() . '/js/materialize.min.js' );
	wp_enqueue_script( 'my_custom_js', get_template_directory_uri() . '/js/init.js');
}

add_action( 'wp_enqueue_scripts', 'theme_js');
