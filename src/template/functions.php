<?php if ( ! defined( 'ABSPATH' ) ) exit; # Exit if accessed directly

#-----------------#
# LIST OF STYLES  #
#-----------------#

function get_css_files() {

  wp_enqueue_style( 'cookieconsent', get_template_directory_uri() . '/vendor/cookieconsent/cookieconsent.min.css' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/bootstrap.min.css' );
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/vendor/font-awesome-4/css/font-awesome.min.css' );
	wp_enqueue_style( 'styles', get_template_directory_uri() . '/css/styles.css' );

}
add_action( 'wp_enqueue_scripts', 'get_css_files' );

#------------------#
# LIST OF SCRIPTS  #
#------------------#

function get_js_files() {

	wp_enqueue_script( 'jquery', array(), null, true );
  wp_enqueue_script( 'cookieconsent-js', get_template_directory_uri() . '/vendor/cookieconsent/cookieconsent.min.js', array(), null, true );
	wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/vendor/popper/popper.js', array(), null, true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/vendor/bootstrap/bootstrap.min.js', array(), null, true );
  wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array(), null, true );

}
add_action( 'wp_enqueue_scripts', 'get_js_files' );

#------------------------#
# REMOVE DASHBOARD ITEMS #
#------------------------#

function remove_menu_items() {

  remove_menu_page( 'edit.php' ); # posts page
  remove_menu_page( 'edit-comments.php' ); # comments page
  // remove_menu_page( 'edit.php?post_type=acf-field-group' ); # acf page

}
add_action( 'admin_menu', 'remove_menu_items' );

?>