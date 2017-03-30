<?php
/**
 * The template for displaying archive pages
 */

get_header();

$sidebar_layout = cstheme_option( 'sidebar_layout' );
if( $sidebar_layout == 'left-sidebar' ) {
	$sidebar_class = 'pull-left ';
	$blog_list_wrap_class = 'left_sidebar ';
	$blog_list_class = 'col-md-9 pull-right';
} elseif( $sidebar_layout == 'right-sidebar' ) {
	$sidebar_class = 'pull-right';
	$blog_list_wrap_class = 'right_sidebar ';
	$blog_list_class = 'col-md-9 pull-left ';
} else {
	$sidebar_class = $blog_list_class = '';
	$blog_list_wrap_class = 'no_sidebar ';
}
?>
		
		<div id="blog_list" class="container blog_list_style_default mt0 <?php echo $blog_list_wrap_class ?>">
			<div class="page_title text-center">
				<h1>
					<?php
						if ( is_day() ) :
							echo esc_html_e( 'DAILY ARCHIVES ', 'voyager' );
							printf( esc_html__( '%s', 'voyager' ), get_the_date() );

						elseif ( is_month() ) :
							echo esc_html_e( 'MONTHLY ARCHIVES ', 'voyager' );
							printf( esc_html__( '%s', 'voyager' ), get_the_date( esc_html_x( 'F Y', 'monthly archives date format', 'voyager' ) ) );

						elseif ( is_year() ) :
							echo esc_html_e( 'YEARLY ARCHIVES ', 'voyager' );
							printf( esc_html__( '%s', 'voyager' ), get_the_date( esc_html_x( 'Y', 'yearly archives date format', 'voyager' ) ) );

						else :
							esc_html_e( 'ARCHIVES', 'voyager' );

						endif;
					?>
				</h1>
			</div>
			<div class="row">
			
			<?php
			if( $sidebar_layout == 'left-sidebar' || $sidebar_layout == 'right-sidebar' ) {
			echo '
				<div class="' . $blog_list_class . '">
					<div class="row">
				';
			}
			?>

						<?php
							while (have_posts()) {
								the_post();
								get_template_part('templates/blog/loop');
							}
						?>
					
			<?php
			if( $sidebar_layout == 'left-sidebar' || $sidebar_layout == 'right-sidebar' ) {
			echo '
					</div>
				';
					
					cstheme_pagination();
			
			echo '
				</div>
				';
			}
			?>
				
				<?php if( $sidebar_layout == 'left-sidebar' || $sidebar_layout == 'right-sidebar' ) { ?>
					<div class="col-md-3 <?php echo $sidebar_class ?>">
						<?php get_sidebar(); ?>
					</div>
				<?php } ?>
				
			</div>
			
			<?php
				if( $sidebar_layout == 'no-sidebar' ) {
					cstheme_pagination();
				}
			?>
			
		</div>

<?php get_footer(); ?>