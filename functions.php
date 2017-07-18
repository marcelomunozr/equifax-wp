<?php
    add_theme_support( 'post-thumbnails' );
    add_image_size('slide-homi', 869, 465, true, array( 'center', 'center' ) );
    add_image_size('box', 700, 394, true, array( 'center', 'center' ) );
    add_image_size('clientes', 260, 230, true, array( 'center', 'center' ) );
    
    function register_my_menu() {
      register_nav_menu('header-menu', 'Header Menu');
    }
    add_action( 'init', 'register_my_menu' );
    
    @ini_set( 'upload_max_size' , '10M' );
    @ini_set( 'post_max_size', '10M');
    @ini_set( 'max_execution_time', '300' );
    

?>
