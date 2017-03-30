<?php

// Prevent direct access to the file
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( !defined('WP_LOAD_IMPORTERS') ) define('WP_LOAD_IMPORTERS', true);

include_once( ABSPATH .'wp-admin/includes/plugin.php' );

if ( is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
	$demo_data_file = get_template_directory() . '/framework/importer/data/demo_woo.xml';
} else{
	$demo_data_file = get_template_directory() . '/framework/importer/data/demo.xml';
}


// Load Importer API
$class_wp_import = get_template_directory() . '/framework/importer/wordpress-importer.php';
if ( file_exists( $class_wp_import ) ) {
	require_once $class_wp_import ;
}


if ( class_exists( 'WP_Import' ) ) {
	include_once( get_template_directory() . '/framework/importer/cstheme-wp-import.php');
}

if ( ! is_file( $demo_data_file ) ) {
	echo 'The demo data XML file could not be found in the theme directory. Please import the demo data XML file manually using Tools -> Import -> WordPress';
}
else
{

	do_action('cstheme_before_demo_import');

	$wp_import = new Cstheme_WP_Import();
	$wp_import->fetch_attachments = true;


	$wp_import->import( $demo_data_file );
	$wp_import->set_menus();
	$wp_import->set_pages();
	$wp_import->set_permalinks();
	/**/

	do_action('cstheme_after_demo_import');
	
}