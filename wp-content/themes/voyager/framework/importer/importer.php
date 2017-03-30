<?php

/**
 * Import the demo data from the demo.xml file
 */
if ( ! function_exists( 'cstheme_ajax_demo_import' ) ) {
	function cstheme_ajax_demo_import()
	{

		// Die if nonce is invalid
		check_ajax_referer( 'cstheme_demo_import_nonce' );

		//ob_start();
		require_once( get_template_directory() .'/framework/importer/config.php' );

		die( 'demo_data_imported' );

	}

	add_action( 'wp_ajax_cstheme_ajax_demo_import', 'cstheme_ajax_demo_import' );
}
