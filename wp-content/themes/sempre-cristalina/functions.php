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

/* Increase image size*/
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

// Remover auto p
remove_filter( 'the_excerpt', 'wpautop' );
remove_filter ('the_content', 'wpautop');

//Desativando o Editor de Temas
define('DISALLOW_FILE_EDIT', true);

