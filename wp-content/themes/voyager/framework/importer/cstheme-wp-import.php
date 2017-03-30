<?php
class Cstheme_WP_Import extends WP_Import
{
	function set_menus()
	{
		$locations = get_theme_mod( 'nav_menu_locations' ); // registered menu locations in theme
		$menus = wp_get_nav_menus(); // registered menus

		if($menus) {
			foreach($menus as $menu) { // assign menus to theme locations
				if( $menu->name == 'Primary Menu' ) {
					$locations['primary'] = $menu->term_id;
				}
			}
		}

		set_theme_mod( 'nav_menu_locations', $locations ); // set menus to locations

		echo 'cs_menus_set';
	}

	function set_pages()
	{
		
		// Use a static front page
		$home_page = get_page_by_title( 'Home' );
		if ( ! empty( $home_page ) && is_object( $home_page ) ){
			update_option( 'page_on_front', $home_page->ID );
			update_option( 'show_on_front', 'page' );
		}
		
		// Set the blog page
		$blog = get_page_by_title( 'Blog Default' );
		if ( ! empty( $blog ) && is_object( $blog ) ){
			update_option( 'page_for_posts', $blog->ID );
		}

		echo 'cs_pages_set';
	}

	function set_permalinks()
	{
		global $wp_rewrite;
		$wp_rewrite->set_permalink_structure('/%postname%/');
		flush_rewrite_rules();
		echo 'cs_permalinks_set';
	}

}