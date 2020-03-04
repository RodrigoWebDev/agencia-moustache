<?php

function replace_core_jquery_version() {
    wp_deregister_script( 'jquery-core' );
    wp_register_script( 'jquery-core', get_template_directory_uri() . '/assets/js/jquery.js');
    wp_deregister_script( 'jquery-migrate' );
    wp_register_script( 'jquery-migrate', get_template_directory_uri() . '/assets/js/jquery-migrate.js');
    
}
add_action( 'wp_enqueue_scripts', 'replace_core_jquery_version' );

function start_scripts() {
    //CSS
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css' );
    wp_enqueue_style( 'blog', get_template_directory_uri() . '/assets/css/main.css' );

    //JS
	wp_enqueue_script( 'input-mask', get_template_directory_uri() . '/assets/js/inputmask.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'sweetalert', get_template_directory_uri() . '/assets/js/sweetalert.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), false, true );
}
add_action( 'wp_enqueue_scripts', 'start_scripts' );

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );


?>