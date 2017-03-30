<?php

global $posts_carousel_position;

wp_enqueue_script('cstheme_owlcarousel_js', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), false, true);
wp_enqueue_style('cstheme_owl_carousel_css', get_template_directory_uri() . '/css/owl.carousel.css');

$posts_carousel_title = get_metabox( 'posts_carousel_title' );
$posts_carousel_cat = get_metabox( 'posts_carousel_cat' );
$posts_carousel_orderby = get_metabox( 'posts_carousel_orderby' );
$posts_carousel_count = get_metabox( 'posts_carousel_count' );
?>

<div id="posts_carousel" class="position_<?php echo $posts_carousel_position ?>">
	<div class="container <?php if(!empty( $posts_carousel_title ) ) { echo 'with_title'; } ?>">
	
		<?php if(!empty( $posts_carousel_title ) ) { echo '<div class="text-center"><h2 class="posts_carousel_title">'. esc_attr( $posts_carousel_title ) .'</h2></div>'; } ?>
		
		<?php
			
			$args = array(
				'post_type' 		=> 'post',
				'cat' 				=> ((isset($posts_carousel_cat) && $posts_carousel_cat) ? $posts_carousel_cat : 'all'),
				'orderby' 			=> ((isset($posts_carousel_orderby) && $posts_carousel_orderby) ? $posts_carousel_orderby : 'date'),
				'posts_per_page' 	=> ((isset($posts_carousel_count) && $posts_carousel_count) ? $posts_carousel_count : '6'),
				'post_status' 		=> 'publish'
			);
			
		?>
			
		<div class="posts_carousel_list owl-carousel clearfix">
			
			<?php
				$my_query = new WP_Query($args);
				
				if( $my_query->have_posts() ) {
					
					while ($my_query->have_posts()) : $my_query->the_post();
					
					$featured_image_url = wp_get_attachment_url(get_post_thumbnail_id());
					$featured_image = '<img src="' . aq_resize( $featured_image_url, 300, 180, true, true, true ) . '" alt="' . get_the_title() . '" />';
					?>
					
						<div class="item">
							<div class="posts_carousel_item">
								<?php if( !empty( $featured_image ) ) { ?>
									<a class="post_format_content" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo $featured_image ?></a>
								<?php } else {?>
									<a class="post_format_content no-image" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">No Image</a>
								<?php } ?>
								<div class="posts_carousel_descr">
									<span class="posts_carousel_meta_date"><?php the_time('M j, Y') ?></span>
									<h6 class="posts_carousel_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h6>
								</div>
							</div>
						</div>
						
					<?php
					endwhile;
					wp_reset_postdata();
					
				}
			?>
			
		</div>
	</div>
	<div class="posts_carousel_overlay"></div>
</div>

<script type="text/javascript">
	jQuery(window).load(function() {
		jQuery('.posts_carousel_list.owl-carousel').owlCarousel({
			margin: 30,
			dots: false,
			nav: true,
			navText: [
				"<i class='fa fa-chevron-left'></i>",
				"<i class='fa fa-chevron-right'></i>"
			],
			loop: true,
			autoplay: true,
			autoplaySpeed: 1000,
			autoplayTimeout: 3000,
			navSpeed: 1000,
			autoplayHoverPause: true,
			responsive: {
				0: {items: 1},
				480: {items: 2},
				481: {items: 3},
				769: {items: 3},
				960: {items: 4}
			},
			thumbs: false
		});
	});
</script>