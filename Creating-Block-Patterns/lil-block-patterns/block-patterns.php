<?php
/**
 * Plugin Name:     Block Patterns
 * Plugin URI:      https://linkedin.com/learning/
 * Description:     A collection of block patterns
 * Version:         1.0.0
 * Author:          Joe Casabona
 * Author URI:     	https:/casabona.org/
 * License:         GPL-3.0+
 * License URI:     http://www.gnu.org/licenses/gpl-2.0.txt
 */
 
 // If this file is called directly, abort.
  if ( ! defined( 'WPINC' ) ) {
	  die;
  }
  
  /**
   * Currently plugin version.
   */
  define( 'LIL_BP_VERSION', '1.0.0' );
  
  /**
   * Plugin URL
   */
  define( 'LIL_BP_URL', plugin_dir_url( __FILE__ ) ); //This include the trailing slash! 

//   ENQUEUE STYLES
  function lil_bp_add_styles() {
    wp_enqueue_style('lil-bp-styles', LIL_BP_URL . 'inc/lil-bp-styles.css');
  };

add_action('wp_enqueue_scripts', 'lil_bp_add_styles');

// GRAB PATTERNS & CATEGORIES
require_once('inc/categories.php');
require_once('inc/patterns.php');
  