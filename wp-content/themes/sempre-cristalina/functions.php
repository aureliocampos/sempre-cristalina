<?php
/**
 * Sempre Cristalina functions and definitions
 *
 *
 * @package WordPress
 * @subpackage Sempre Cristalina
 * @since 1.0
 */

/**
 * Sempre Cristalina only works in WordPress 4.7 or later.
 */

//include_once (get_template_directory (). '/mjv-theme-functions/custom-post-types.php');
//include_once (get_template_directory (). '/mjv-theme-functions/theme-supports.php');
//include_once (get_template_directory (). '/mjv-theme-functions/widgets.php');

wp_enqueue_style( 'main', get_template_directory_uri() . '/scss/main.css',false,'1.1','all');
//wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', false, '1.1', 'all');
//wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array ( 'jquery' ), 1.1, true);

/* Increase image size*/
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

// Remover auto p
remove_filter( 'the_excerpt', 'wpautop' );
remove_filter ('the_content', 'wpautop');

if ( function_exists( 'register_nav_menu' ) ) {
    register_nav_menu( 'menu-header', 'Menu Header' );
}

// Adicionando classe ao <li></li>
function add_classes_on_li($classes) {
    $classes[] = 'smp-nav-item';
    return $classes;
}
add_filter('nav_menu_css_class','add_classes_on_li',1,3);

// Adicionando classe ao <a href=""></a>
function add_linkclass($ulclass) {
    return preg_replace('/<a/', '<a class="smp-nav-link"', $ulclass, -1);
}
add_filter('wp_nav_menu','add_linkclass');

//Desativando o Editor de Temas
define('DISALLOW_FILE_EDIT', true);

