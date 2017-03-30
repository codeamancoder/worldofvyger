<?php
/**
 * The Posts Categories List with Thumbnails
 */

global $post, $categories_list_position;

wp_enqueue_script('cstheme_owlcarousel_js', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), false, true);
wp_enqueue_style('cstheme_owl_carousel_css', get_template_directory_uri() . '/css/owl.carousel.css');
?>
		
		<div id="categories_list" class="position_<?php echo $categories_list_position ?>">
			<div class="container">
				<div class="categories_carousel owl-carousel">
					<?php foreach (get_categories() as $cat) : ?>
						<div class="item">
							<a href="<?php echo esc_url( get_category_link($cat->term_id) ); ?>">
								<?php $featured_image_url =  z_taxonomy_image_url($cat->term_id); ?>
								<img src="<?php echo aq_resize( $featured_image_url, 300, 200, true, true, true ) ?>" alt="" />
								<div class="categories_item_descr">
									<span class="heading_font"><?php echo $cat->cat_name; ?></span>
									<p>All posts</p>
								</div>
								<span class="overlay_border"></span>
							</a>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		
		<script type="text/javascript">
		jQuery(window).load(function() {
			jQuery('.categories_carousel.owl-carousel').owlCarousel({
				margin: 30,
				dots: false,
				nav: false,
				loop: true,
				autoplay: true,
				autoplaySpeed: 1000,
				autoplayTimeout: 3000,
				navSpeed: 1000,
				autoplayHoverPause: true,
				responsive: {
					0: {items: 1},
					320: {items: 2},
					480: {items: 2},
					481: {items: 3},
					960: {items: 4}, 
					1940: {items: 4}
				},
				thumbs: false
			});
		});
		</script>